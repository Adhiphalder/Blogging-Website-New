<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Join; 
use App\Models\Follow;
use App\Models\Comment;
use App\Models\Communities;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{


    public function comment($post_id) 
    {
        // return view('User.Comment');

        if (!Auth::check()) {
            return redirect()->route('register')->with('error', 'Please register or log in to view comments.');
        }
    
        $post = Post::with('user')->findOrFail($post_id);
        
        $comments = Comment::where('post_id', $post_id)->with('user')->get();
    
        return view('User.Comment', compact('post', 'comments'));

    }

    public function storeComment(Request $request, $post_id)
    {
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);
    
        Comment::create([
            'user_id' => Auth::id(), 
            'post_id' => $post_id,   
            'comment' => $request->comment, 
        ]);
    
        return redirect()->back()->with('success', 'Comment added successfully!');
    }


    public function create(Request $request) 
    {

        $userId = session('user_id');
        if (!$userId) {
            return redirect()->route('register')->with('error', 'Please login to create a post.');
        }

        $joinedCommunities = \DB::table('join')
            ->join('communities', 'join.community_id', '=', 'communities.community_id')
            ->where('join.user_id', $userId)
            ->select('communities.community_id', 'communities.community_name', 'communities.community_pic')
            ->get();

        return view('User.Create', compact('joinedCommunities'));


    }

    public function storePost(Request $request)
    {
        $request->validate([
            'post_caption' => 'required|string|max:255',
            'post_desc' => 'string|nullable',
            'post_img' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'selected_entity' => 'required'
        ]);
    
        $postImagePath = null;
        if ($request->hasFile('post_img')) {
            $postImagePath = $request->file('post_img')->store('posts', 'public');
        }
    
        $userId = session('user_id');
        $selectedEntity = $request->selected_entity;
    
        $user_id = null;
        $community_id = null;
    
        if (strpos($selectedEntity, 'r/') !== false) {
            $selectedEntity = str_replace('r/', '', $selectedEntity);
            
            if ($selectedEntity === User::find($userId)->user_name) {
                $user_id = $userId; 
            } else {
                $community = Communities::where('community_name', $selectedEntity)->first();
                if ($community) {
                    $community_id = $community->community_id; 
                    $user_id = $userId; 
                }
            }
        }
    
        if (!$user_id && !$community_id) {
            return redirect()->back()->withInput()->with('error', 'Please select a valid community or your profile.');
        }
    
        $post = Post::create([
            'post_caption' => $request->post_caption,
            'post_desc' => $request->post_desc,
            'post_img' => $postImagePath,
            'user_id' => $user_id,
            'community_id' => $community_id,
        ]);
    
        if ($community_id) {
            $community = Communities::find($community_id);
            if ($community) {
                $community->increment('community_total_posts');
            }
        }
    
        if ($community_id) {
            if ($community->user_id === $userId) {
                return redirect()->route('show.mycommunity', ['community_name' => $community->community_name])
                    ->with('success', 'Post created successfully!');
            } else {
                return redirect()->route('show.community', ['community_name' => $community->community_name])
                    ->with('success', 'Post created successfully!');
            }
        }
    
        return redirect()->route('profile')->with('success', 'Post created successfully!');
    }

    public function profile() 
    {
        // return view('User.Profile');

        $userId = session('user_id'); 

        if (!$userId) {
            return redirect()->route('register')->with('error', 'Please login to access your profile.');
        }
    
        $user = User::findOrFail($userId); 
    
        $posts = Post::with('community')->withCount('comments')
            ->where('user_id', $userId)
            ->where(function ($query) {
                $query->whereNull('community_id')
                    ->orWhereHas('community', function ($subQuery) {
                        $subQuery->where('community_suspend', 0);
                    });
            })
            ->latest()
            ->get();
    
        $totalPosts = $posts->count();
    
        $totalFollowers = Follow::where('following_id', $userId)->count();
    
        $totalComments = Comment::where('user_id', $userId)->count();
    
        return view('User.Profile', compact('user', 'posts', 'totalPosts', 'totalFollowers', 'totalComments'));
    }

    public function editprofile($post_id = null)
    {
        // return view('User.EditProfile');


        if (!Auth::check()) {
            return redirect()->route('register')->with('error', 'Please register or log in to edit your profile.');
        }
    
        $user = auth()->user(); 
    
        if ($post_id) {
            $post = Post::find($post_id);
            if (!$post) {
                return redirect()->route('profile')->with('error', 'Post not found.');
            }
    
            return view('User.EditProfile', compact('user', 'post'));
        }
    
        return view('User.EditProfile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $userId = session('user_id'); 
        $user = User::findOrFail($userId);

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $userId . ',user_id',
            'display_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,user_name,' . $userId . ',user_id',
            'phone' => 'nullable|string|max:15',
            'dob' => 'nullable|date',
            'gender' => 'required|in:M,F,O',
            'bio' => 'nullable|string|max:50',
            'password' => 'nullable|string|confirmed', 
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'cover_img' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $user->email = $request->email;
        $user->name = $request->display_name;
        $user->user_name = $request->username; 
        $user->phone = $request->phone;
        $user->DOB = $request->dob;
        $user->gender = $request->gender;
        $user->bio = $request->bio;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        if ($request->hasFile('profile_pic')) {
            $profilePicPath = $request->file('profile_pic')->store('profile_pictures', 'public');
            $user->profile_pic = $profilePicPath;
        }

        if ($request->hasFile('cover_img')) { 
            $coverImgPath = $request->file('cover_img')->store('cover_pictures', 'public'); 
            $user->cover_img = $coverImgPath; 
        }

        $user->save();

        session(['user' => $user]); 

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }

    public function showUserPosts()
    {
        $userId = session('user_id'); 

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please log in to view your posts.');
        }

        $posts = Post::where('user_id', $userId)->get(); 

        return view('user.posts', compact('posts'));
    }

    public function updatePost(Request $request, $post_id)
    {

        $request->validate([
            'post_caption' => 'required|string|max:255',
            'post_desc' => 'string|nullable',
            'cover_img' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $post = Post::findOrFail($post_id);
        $post->post_caption = $request->post_caption;
        $post->post_desc = $request->post_desc;
    
        if ($request->hasFile('cover_img')) {
            $postImagePath = $request->file('cover_img')->store('posts', 'public');
            $post->post_img = $postImagePath;
        }
    
        $post->save();
    
        if ($post->community_id) {
            $community = Communities::find($post->community_id);
            
            if ($community->user_id === Auth::id()) {
                return redirect()->route('show.mycommunity', ['community_name' => $community->community_name])
                                 ->with('success', 'Post updated successfully!');
            } else {
                return redirect()->route('show.community', ['community_name' => $community->community_name])
                                 ->with('success', 'Post updated successfully!');
            }
        }
    
        return redirect()->route('profile')->with('success', 'Post updated successfully!');
    }

    public function deletePost($post_id)
    {
        $post = Post::find($post_id);
        if (!$post) {
            return redirect()->route('profile')->with('error', 'Post not found.');
        }

        $post->delete(); 

        return redirect()->route('profile')->with('success', 'Post deleted successfully!');
    }

    public function showProfile()
    {

        $user = User::find($user_id);

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found.');
        }

        return view('User.Profile', compact('user'));
    }

    public function outprofile($username)
    {

        // return view('User.OutsiderProfile'); 


        // $user = User::where('user_name', $username)->first();

        // if (!$user) {
        //     return redirect()->route('home')->with('error', 'User not found.');
        // }
    
        // $userId = $user->user_id;
    
        // $posts = Post::with('community')->withCount('comments')
        //     ->where('user_id', $userId)
        //     ->where(function ($query) {
        //         $query->whereNull('community_id')
        //             ->orWhereHas('community', function ($subQuery) {
        //                 $subQuery->where('community_suspend', 0);
        //             });
        //     })
        //     ->latest()
        //     ->get();
    
        // $totalPosts = $posts->count();
    
        // $totalFollowers = Follow::where('following_id', $userId)->count();
    
        // $totalComments = Comment::where('user_id', $userId)->count();
    
        // return view('User.OutsiderProfile', compact('user', 'posts', 'totalPosts', 'totalFollowers', 'totalComments'));



        $user = User::where('user_name', $username)->first();

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found.');
        }
    
        $userId = $user->user_id;
    
        $posts = Post::with('community')->withCount('comments')
            ->where('user_id', $userId)
            ->where(function ($query) {
                $query->whereNull('community_id')
                    ->orWhereHas('community', function ($subQuery) {
                        $subQuery->where('community_suspend', 0);
                    });
            })
            ->latest()
            ->get();
    
        $totalPosts = $posts->count();
    
        $totalFollowers = Follow::where('following_id', $userId)->count();
    
        $totalComments = Comment::where('user_id', $userId)->count();
    
        return view('User.OutsiderProfile', compact('user', 'posts', 'totalPosts', 'totalFollowers', 'totalComments'));
        
    }

    public function welcome() {
        // return view('welcome');


        if (!Auth::check()) {
            $allPosts = Post::with('community')->withCount('comments')
                ->whereHas('community', function ($query) {
                    $query->where('community_suspend', 0);
                })
                ->latest()
                ->get();

            return view('welcome', compact('allPosts'));
        }
        
        $userId = Auth::id();
        
        $followedUserIds = Follow::where('follower_id', $userId)->pluck('following_id');
        $joinedCommunityIds = Join::where('user_id', $userId)->pluck('community_id');

        $userPosts = Post::with('community')->withCount('comments')
            ->whereIn('user_id', $followedUserIds)
            ->where(function ($query) {
                $query->whereNull('community_id')
                    ->orWhereHas('community', function ($subQuery) {
                        $subQuery->where('community_suspend', 0);
                    });
            })
            ->latest()
            ->get();

        $communityPosts = Post::with('community')->withCount('comments')
            ->whereIn('community_id', $joinedCommunityIds)
            ->whereHas('community', function ($query) {
                $query->where('community_suspend', 0);
            })
            ->latest()
            ->get();

        $myCommunityPosts = Post::with('community')->withCount('comments')
            ->where('user_id', $userId)
            ->where(function ($query) {
                $query->whereNull('community_id')
                    ->orWhereHas('community', function ($subQuery) {
                        $subQuery->where('community_suspend', 0);
                    });
            })
            ->latest()
            ->get();

        $otherUserPosts = Post::with('community')->withCount('comments')
            ->whereNotIn('user_id', $followedUserIds)
            ->whereNotIn('community_id', $joinedCommunityIds)
            ->where(function ($query) {
                $query->whereNull('community_id')
                    ->orWhereHas('community', function ($subQuery) {
                        $subQuery->where('community_suspend', 0);
                    });
            })
            ->latest()
            ->get();

        $allPosts = $userPosts->merge($communityPosts)->merge($myCommunityPosts)->merge($otherUserPosts)->shuffle();
        
        return view('welcome', compact('allPosts'));
        
    }

    public function viewmember($user_id){
        // return view('User.ViewMember');

        $user = User::find($user_id);

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found.');
        }

        $followers = Follow::where('following_id', $user_id)
            ->with('follower') 
            ->get();

        return view('User.ViewMember', compact('user', 'followers'));
    }

    public function showFollowers($user_id)
    {
        $user = User::find($user_id);
    
        if (!$user) {
            return redirect()->route('home')->with('error', 'User  not found.');
        }
    
        $followers = Follow::where('following_id', $user_id)
            ->with('follower') 
            ->get();
    
        return view('User .Followers', compact('user', 'followers'));
    }

    public function follow(Request $request, $user_id)
    {
        // $followerId = Auth::id();

        // if ($followerId == $user_id) {
        //     return redirect()->back()->with('error', 'You cannot follow yourself.');
        // }

        // if (Follow::where('follower_id', $followerId)->where('following_id', $user_id)->exists()) {
        //     return redirect()->back()->with('error', 'Already following this user.');
        // }

        // Follow::create([
        //     'follower_id' => $followerId,
        //     'following_id' => $user_id,
        // ]);

        // return redirect()->back()->with('success', 'User followed successfully!');


        if (!Auth::check()) {
            return redirect()->route('register')->with('error', 'Please log in to follow a user.');
        }
    
        $followerId = Auth::id();
    
        if ($followerId == $user_id) {
            return redirect()->back()->with('error', 'You cannot follow yourself.');
        }
    
        if (Follow::where('follower_id', $followerId)->where('following_id', $user_id)->exists()) {
            return redirect()->back()->with('error', 'Already following this user.');
        }
    
        Follow::create([
            'follower_id' => $followerId,
            'following_id' => $user_id,
        ]);
    
        return redirect()->back()->with('success', 'User followed successfully!');
    

    }

    public function unfollow(Request $request, $user_id)
    {
        $followerId = Auth::id();
    
        $follow = Follow::where('follower_id', $followerId)
                        ->where('following_id', $user_id)
                        ->first();
    
        if ($follow) {
            $follow->delete();
            return response()->json(['success' => true]);
        }
    
        return response()->json(['success' => false]);


    }
    
}