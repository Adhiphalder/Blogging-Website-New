<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Communities;
use App\Models\User;
use App\Models\Post;

class CommunityController extends Controller
{
    public function createCommunity()
    {
        return view('Community.CreateCommunity');
    }

    public function storeCommunity(Request $request)
    {
        $validatedData = $request->validate([
            'community_name' => 'required|string|max:17|unique:communities,community_name',
            'community_description' => 'required|string|max:50',
            'community_coverpic' => 'nullable|image|mimes:jpeg,png,jpg',
            'community_pic' => 'nullable|image|mimes:jpeg,png,jpg',
            'main-form3-name' => 'required|string|in:games,technologies,movies,travel,music,education,sport,news_politics,business_finance',
        ]);

        $community = new Communities();
        $community->fill($validatedData);
        $community->user_id = Auth::id();
        $community->community_total_member = 0;
        $community->community_total_posts = 0;

        if ($request->hasFile('community_coverpic')) {
            $community->community_coverpic = $request->file('community_coverpic')->store('community_banners', 'public');
        }

        if ($request->hasFile('community_pic')) {
            $community->community_pic = $request->file('community_pic')->store('community_profiles', 'public');
        }

        $community->save();

        return redirect()->route('show.mycommunity', ['community_name' => $community->community_name])
                         ->with('success', 'Community created successfully!');
    }

    public function userCommunities()
    {
        $userId = Auth::id();

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }

        $communities = Communities::where('user_id', $userId)
            ->where('community_suspend', 0)
            ->get();

        return view('Community.Community', compact('communities'));
    }

    public function showMyCommunity($community_name)
    {
        $community = Communities::where('community_name', $community_name)
            ->where('community_suspend', 0)
            ->first();

        if (!$community) {
            return redirect()->route('home')->with('error', 'Community not found or suspended.');
        }

        $posts = Post::withCount('comments')
            ->where('community_id', $community->community_id)
            ->latest()
            ->get();

        $totalPosts = $posts->count();
        $totalMembers = \DB::table('join')->where('community_id', $community->community_id)->count();
        $totalActiveUsers = \DB::table('sessions')->whereNotNull('user_id')->count();

        return view('Community.MyCommunity', compact('community', 'posts', 'totalPosts', 'totalMembers', 'totalActiveUsers'));
    }

    public function showCommunity($community_name)
    {
        $community = Communities::where('community_name', $community_name)
            ->where('community_suspend', 0)
            ->first();

        if (!$community) {
            return redirect()->route('home')->with('error', 'Community not found or suspended.');
        }

        $posts = Post::withCount('comments')
            ->where('community_id', $community->community_id)
            ->latest()
            ->get();

        $totalPosts = $posts->count();
        $userId = Auth::id();
        $isMember = \DB::table('join')->where('user_id', $userId)->where('community_id', $community->community_id)->exists();
        $totalMembers = \DB::table('join')->where('community_id', $community->community_id)->count();
        $totalActiveUsers = \DB::table('sessions')->whereNotNull('user_id')->count();

        return view('Community.Community', compact('community', 'posts', 'isMember', 'totalPosts', 'totalMembers', 'totalActiveUsers'));
    }

    public function explore()
    {
        $userId = Auth::id();

        $otherCommunities = Communities::where('user_id', '!=', $userId)
            ->where('community_suspend', 0) 
            ->whereNotIn('community_id', function($query) use ($userId) {
                $query->select('community_id')
                    ->from('join')
                    ->where('user_id', $userId);
            })
            ->get();

        foreach ($otherCommunities as $community) {
            $community->members_count = \DB::table('join')->where('community_id', $community->community_id)->count();
        }

        $groupedCommunities = $otherCommunities->groupBy('category');

        return view('Community.Explore', compact('groupedCommunities'));
    }

    public function editCommunity($community_name)
    {
        $community = Communities::where('community_name', $community_name)->first();

        if (!$community) {
            return redirect()->route('home')->with('error', 'Community not found.');
        }

        if (Auth::id() !== $community->user_id) {
            return redirect()->route('home')->with('error', 'You do not have permission to edit this community.');
        }

        return view('Community.CreateCommunity', compact('community'));
    }

    public function updateCommunity(Request $request, $community_name)
    {
        $community = Communities::where('community_name', $community_name)->first();

        if (!$community) {
            return redirect()->route('home')->with('error', 'Community not found.');
        }

        $validatedData = $request->validate([
            'community_name' => 'required|string|max:17|unique:communities,community_name,' . $community->community_id . ',community_id',
            'community_description' => 'required|string|max:50',
            'community_coverpic' => 'nullable|image|mimes:jpeg,png,jpg',
            'community_pic' => 'nullable|image|mimes:jpeg,png,jpg',
            'main-form3-name' => 'required|string|in:games,technologies,movies,travel,music,education,sport,news_politics,business_finance',
        ]);

        $community->fill($validatedData);

        if ($request->hasFile('community_coverpic')) {
            $community->community_coverpic = $request->file('community_coverpic')->store('community_banners', 'public');
        }

        if ($request->hasFile('community_pic')) {
            $community->community_pic = $request->file('community_pic')->store('community_profiles', 'public');
        }

        $community->save();

        return redirect()->route('show.mycommunity', ['community_name' => $community->community_name])
                        ->with('success', 'Community updated successfully!');
    }

    public function joinCommunity(Request $request, $community_name)
    {
        $userId = Auth::id();
        $community = Communities::where('community_name', $community_name)->first();

        if (!$community) {
            return redirect()->route('home')->with('error', 'Community not found.');
        }

        $alreadyJoined = \DB::table('join')->where('user_id', $userId)->where('community_id', $community->community_id)->exists();

        if ($alreadyJoined) {
            return redirect()->back()->with('error', 'You are already a member of this community.');
        }

        \DB::table('join')->insert([
            'user_id' => $userId,
            'community_id' => $community->community_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $community->increment('community_total_member');

        return redirect()->route('show.community', ['community_name' => $community_name])
                        ->with('success', "You're successfully joined this community!");
    }

    public function leaveCommunity(Request $request, $community_name)
    {
        $userId = Auth::id();
        $community = Communities::where('community_name', $community_name)->first();

        if (!$community) {
            return response()->json(['error' => 'Community not found.'], 404);
        }

        \DB::table('join')->where('user_id', $userId)->where('community_id', $community->community_id)->delete();
        $community->decrement('community_total_member');

        return response()->json(['success' => "You've left the community successfully!"]);
    }

    public function viewMemberCom($community_name)
    {
        $community = Communities::where('community_name', $community_name)->first();

        if (!$community) {
            return redirect()->route('home')->with('error', 'Community not found.');
        }

        $members = \DB::table('join')
            ->join('users', 'join.user_id', '=', 'users.user_id')
            ->where('join.community_id', $community->community_id)
            ->select('users.user_id', 'users.user_name', 'users.profile_pic')
            ->get();

        $user = User::find($community->user_id);

        return view('User .ViewMemberCom', compact('community', 'members', 'user'));
    }
}