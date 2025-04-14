<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Communities;
use App\Models\Admin;
use App\Models\User;
use App\Models\Post;
use Carbon\Carbon;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{


    public function adminlogin(){
        return view('Admin.AdminLogin');
    }

    public function adminAuth(Request $request)
    {
        $request->validate([
            'admin_id' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('admin_id', $request->admin_id)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            $request->session()->put('admin', $admin);
            $request->session()->put('admin_id', $admin->admin_id);

            return redirect()->route('dashboard')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['admin_id' => 'Invalid credentials']);
    }


    public function adminhome(){
        // return view('Admin.AdminHome');

        if (!session()->has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
    
        $totalUsersLast24Hours = User::where('created_at', '>=', now()->subDay())->count();
        $totalPostsLast24Hours = Post::where('created_at', '>=', now()->subDay())->count();

        $users = User::orderBy('created_at', 'desc')->get();
        $admin = session('admin');
    
        return view('Admin.AdminHome', compact('totalUsersLast24Hours', 'totalPostsLast24Hours', 'users',  'admin'));
    }

    public function suspendUser (Request $request, $userId)
    {
        $request->validate([
            'suspend_account' => 'required|integer|in:0,1',
        ]);

        $user = User::find($userId);

        if ($user) {
            $user->suspend_account = $request->suspend_account;
            $user->save();

            $message = $request->suspend_account ? 'User  account suspended.' : 'User  account activated.';
            return response()->json(['success' => true, 'message' => $message]);
        }

        return response()->json(['success' => false, 'error' => 'User  not found.']);
    }

    public function deleteUser ($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User  deleted successfully.');
        }

        return redirect()->back()->withErrors(['user' => 'User  not found.']);
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
    }

    public function adminuser()
    {
        // return view('Admin.AdminUser');

        if (!session()->has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
    
        $users = User::all(); 
        $admin = session('admin');
    
        return view('Admin.AdminUser ', compact('users',  'admin'));
    }

    public function adminpost()
    {
        // return view('Admin.AdminPost');

        if (!session()->has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
    
        $posts = Post::withCount('comments')->get();
        $admin = session('admin');
    
        return view('Admin.AdminPost', compact('posts', 'admin'));
    }

    public function deletePost($post_id)
    {
        $post = Post::find($post_id);
        if (!$post) {
            return back()->with('error', 'Post not found.'); 
        }
    
        $post->delete();
    
        return back()->with('success', 'Post deleted successfully!'); 
    }

    public function admincommunity()
    {
        // return view('Admin.AdminCommunity');


        if (!session()->has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
    
        $admin = session('admin'); 
        $communities = Communities::all();
    
        return view('Admin.AdminCommunity', compact('communities', 'admin')); 
    }

    public function suspendCommunity(Request $request, $id) 
    {
        $request->validate([
            'suspend' => 'required|boolean',
        ]);

        $community = Communities::find($id);
        if ($community) {
            $community->community_suspend = $request->suspend;
            $community->save();

            return response()->json([
                'success' => true,
                'message' => $request->suspend ? 'Community suspended.' : 'Community activated.'
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Community not found.'], 404);
    }

    public function deleteCommunity($id)
    {
        $community = Communities::find($id);
        if (!$community) {
            return redirect()->back()->with('error', 'Community not found.');
        }

        $community->delete();
        return redirect()->back()->with('success', 'Community deleted successfully.');
    }


    public function adminmember($community_name)
    {
        // return view('Admin.AdminMember');

        $community = Communities::where('community_name', $community_name)->first();
        $admin = session('admin');

        if (!$community) {
            return redirect()->back()->with('error', 'Community not found.');
        }
    
        $members = \DB::table('join')
            ->join('users', 'join.user_id', '=', 'users.user_id')
            ->where('join.community_id', $community->community_id)
            ->select('users.user_id', 'users.user_name', 'users.created_at as doj')
            ->get();
    
        $memberData = [];
        foreach ($members as $member) {
            $totalPosts = Post::where('user_id', $member->user_id)
                              ->where('community_id', $community->community_id)
                              ->count();
    
            $dojFormatted = Carbon::parse($member->doj)->format('d-m-Y');
    
            $memberData[] = [
                'user_id' => $member->user_id,
                'member_name' => $member->user_name,
                'doj' => $dojFormatted, 
                'total_posts' => $totalPosts,
            ];
        }
    
        return view('Admin.AdminMember', compact('memberData', 'community', 'admin'));

    }

    public function deleteMember($userId)
    {


        $membership = \DB::table('join')->where('user_id', $userId)->first();

        if ($membership) {
            \DB::table('join')->where('user_id', $userId)->delete();
    
            Communities::where('community_id', $membership->community_id)->decrement('community_total_member');
    
            return redirect()->back()->with('success', 'Member removed successfully.');
        }
    
        return redirect()->back()->withErrors(['error' => 'Member not found.']);
    }

    public function admincontent($post_id = null)
    {
        // return view('Admin.AdminContent');


        if (!session()->has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
    
        $post = null;
        $admin = session('admin');
    
        if ($post_id) {
            $post = Post::with(['user', 'community', 'comments.user'])->find($post_id);
    
            if (!$post) {
                return back()->with('error', 'Post not found.');
            }
        }
    
        return view('Admin.AdminContent', compact('post', 'admin'));
    }    

    public function viewpost()
    {
        return view('Admin.ViewPost');
    }
    
    public function adminprofile(){
        // return view('Admin.AdminProfile');

        if (!session()->has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Please log in first.');
        }
    
        $admin = session('admin'); 
    
        return view('Admin.AdminProfile', compact('admin')); 
    }

    public function updatePassword(Request $request)
    {


        $request->validate([
            'new_password' => 'nullable|string|min:4',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);
    
        $admin = session('admin');
        $messages = [];
    
        if ($request->hasFile('profile_pic')) {
            $admin->profile_pic = $request->file('profile_pic')->store('admin/profile_pic', 'public');
            $messages[] = 'Profile picture updated successfully!';
        }
    
        if ($request->filled('new_password')) {
            $admin->password = Hash::make($request->new_password);
            $messages[] = 'Password updated successfully!';
        }
    
        if (!empty($messages)) {
            $admin->save();
            session()->put('admin', $admin);
            return back()->with('success', implode(' ', $messages));
        }
    
        return back()->with('info', 'No changes made.');
        
    }
    
    public function adminfollower(){
        return view('Admin.AdminFollower');
    }

}
