<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Admin;
use App\Models\Communities;
use App\Models\Like;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use App\Models\Join; 
use App\Models\Follow;





// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [UserController::class, 'welcome'])->name('home');



/*---------------------------------*\
  #LOGIN & SIGNUP
\*---------------------------------*/

Route::get('/registration', [LoginController::class, 'registration'])->name('register');

Route::post('/register', [LoginController::class, 'signUp'])->name('register.store');

Route::post('/login', [LoginController::class, 'login'])->name('login.process');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgot', [LoginController::class, 'forgot']);

Route::post('/forgot', [LoginController::class, 'resetPassword'])->name('password.update');




/*---------------*\
  #ADMIN
\*----------------*/

Route::get('/adminlogin', [AdminController::class, 'adminlogin']);

Route::get('/admincommunity', [AdminController::class, 'admincommunity']);

Route::get('/vcommunity', [AdminController::class, 'viewcommunity']);

Route::get('/admincontent', [AdminController::class, 'admincontent']);

Route::get('/adminpost', [AdminController::class, 'adminpost']);

Route::get('/vpost', [AdminController::class, 'viewpost']);

Route::get('/adminuser', [AdminController::class, 'adminuser']);



/*------------------------*\
  #COMMUNITY
\*-------------------------*/

Route::get('/createcommunity', [CommunityController::class, 'createcommunity']);

Route::post('/storecommunity', [CommunityController::class, 'storeCommunity'])->name('store.community');

Route::get('/community', [CommunityController::class, 'community']);

Route::get('/user-communities', [CommunityController::class, 'userCommunities'])->name('user.communities');

Route::get('/mycommunity', [CommunityController::class, 'mycommunity'])->name('mycommunity');

Route::get('/mycommunity/{community_name}', [CommunityController::class, 'showMyCommunity'])->name('show.mycommunity');

Route::post('/mycommunity/{community_name}', [CommunityController::class, 'showMyCommunity'])->name('show.mycommunity');

Route::get('/community/{community_name}', [CommunityController::class, 'showCommunity'])->name('show.community');

Route::get('/explore', [CommunityController::class, 'explore']);

Route::get('/editcommunity/{community_name}', [CommunityController::class, 'editCommunity'])->name('edit.community');

Route::post('/updatecommunity/{community_name}', [CommunityController::class, 'updateCommunity'])->name('update.community');

Route::post('/community/join/{community_name}', [CommunityController::class, 'joinCommunity'])->name('join.community');

Route::post('/community/leave/{community_name}', [CommunityController::class, 'leaveCommunity'])->name('leave.community');

// Route::get('/viewmembercom', [CommunityController::class, 'viewmembercom']);

Route::get('/viewmembercom/{community_name}', [CommunityController::class, 'viewmembercom'])->name('viewmembercom');



/*-------------*\
  #USER
\*--------------*/

// Route::get('/comment', [UserController::class, 'comment']);

Route::get('/comment/{post_id}', [UserController::class, 'comment'])->name('comment');

Route::post('/comment/{post_id}', [UserController::class, 'storeComment'])->name('store.comment');

Route::get('/create', [UserController::class, 'create'])->name('create');

Route::post('/create', [UserController::class, 'storePost'])->name('post.store');

Route::get('/editprofile', [UserController::class, 'editprofile']);

Route::get('/profile/edit/{id}', [UserController::class, 'editprofile'])->name('profile.edit');

// Route::get('/profile/edit/{post_id}', [UserController::class, 'editprofile'])->name('profile.edit');

Route::post('/post/update/{post_id}', [UserController::class, 'updatePost'])->name('update.post');

Route::get('/post/delete/{post_id}', [UserController::class, 'deletePost'])->name('delete.post');

Route::get('/post/edit/{post_id}', [UserController::class, 'editprofile'])->name('post.edit');

Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update.profile');

Route::get('/user/posts', [PostController::class, 'showUserPosts'])->name('user.posts');

Route::get('/profile', [UserController::class, 'showProfile'])->name('profile'); 

Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::post('/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/viewprofile', [UserController::class, 'outprofile'])->name('viewprofile');

Route::get('/viewprofile/{username}', [UserController::class, 'outprofile'])->name('viewprofile');

Route::get('/viewprofile/{username}', [UserController::class, 'outprofile'])->name('outprofile');

Route::post('/posts/{postId}/like', [UserController::class, 'likePost']);

Route::get('/posts/{postId}/likes', [UserController::class, 'getPostLikes']);

Route::get('/users/{userId}/likes', [UserController::class, 'getUserLikes']);

Route::get('/viewmember/{user_id}', [UserController::class, 'viewmember'])->name('viewmember');

Route::get('/user/{user_id}/followers', [UserController::class, 'showFollowers'])->name('user.followers');

Route::get('/user/{username}', [UserController::class, 'outprofile'])->name('user.outsiderProfile');

Route::post('/follow/{user_id}', [UserController::class, 'follow'])->name('follow');

Route::post('/unfollow/{user_id}', [UserController::class, 'unfollow'])->name('unfollow');

Route::get('/viewpost', [UserController::class, 'userviewpost']);