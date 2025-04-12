<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="{{asset('css/admincontent.css')}}">
    </head>

    <body>
        <div class="container">
            <aside>

                <div class="top">
                    <div class="logo">
                        <h2>Hi, <span class="danger">ADHIP</span> </h2>
                    </div>
                    <div class="close" id="close_btn">
                        <span class="material-symbols-sharp">
                            close
                        </span>
                    </div>
                </div>
                <!-- end top -->
                <div class="sidebar">

                    <a href="/dashboard">
                        <span class="material-symbols-sharp">grid_view </span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="/adminuser" >
                        <span class="material-symbols-sharp">person_outline </span>
                        <h3>Users</h3>
                    </a>
                    <a href="/adminpost" class="active">
                        <span class="material-symbols-sharp">insights </span>
                        <h3>Posts</h3>
                    </a>
                    <a href="/admincommunity">
                        <span class="material-symbols-sharp">receipt_long </span>
                        <h3>Communities</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-sharp">mail_outline </span>
                        <h3>Messages</h3>
                        <span class="msg_count">14</span>
                    </a>

                    <a href="#">
                        <span class="material-symbols-sharp">report_gmailerrorred </span>
                        <h3>Reports</h3>
                    </a>
                    <a href="/adminprofile">
                        <span class="material-symbols-sharp">settings </span>
                        <h3>settings</h3>
                    </a>

                    <a href="#">
                        <span class="material-symbols-sharp">logout </span>
                        <h3>logout</h3>
                    </a>



                </div>

            </aside>
            <!-- --------------
            end asid
            -------------------- -->

            <!-- --------------
            start main part
            --------------- -->

            <main>
                <h1>Content View</h1>

                <div class="post-wall">
                    <div class="username">
                        <div class="profile-img2">
                            @if($post->user->profile_pic)
                                <img src="{{ asset('storage/' . $post->user->profile_pic) }}" alt="Profile Picture">
                            @else
                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                            @endif
                        </div>
                        {{-- <span class="username-hover">adhiphalder</span> --}}
                        @if($post && $post->user)
                            <span class="username-hover">{{ $post->user->user_name }}</span>
                        @endif

                        {{-- <span class="username-hover"> | community name</span> --}}
                        @if($post->community_id)
                            <span class="username-hover"> | {{ $post->community->community_name }}</span>
                        @endif

                        {{-- <p> • 22 hr. ago</p> --}}
                        <p> • {{ $post->created_at->diffForHumans() }}</p>

                        {{-- <span class="post-wall-admin" style="color: #d0d3da;">Admin</span>
                        <span class="post-wall-member" style="color: #d0d3da;">Members</span> --}}

                        @if($post->community_id)
                            @if(isset($community->user_id) && $post->user_id === $community->user_id)
                                <span class="post-wall-admin" style="color: #d0d3da;">Admin</span>
                            @else
                                <span class="post-wall-member" style="color: #d0d3da;">Member</span>
                            @endif
                        @endif
                    
    
                    </div>
                    
                    {{-- <h3>Who are you? Without reference to your name, job, culture, hobbies, family and relationships?   </h3> --}}
                    <h3 class="post-wall-first-h3">{{ $post->post_caption }}</h3>

                    {{-- <p class="post-para">Ok so I am 30 years old. Turned 30 back in March and I bought myself a PS5 after my 4 shit out finally after 12 years.
    
                        I was excited about all the big games but was pleasantly entertained with Astro Bot. So clever! My kids would watch me play before bed and they just loved it.
                        
                        Never thought a sequel would come out. Finally got to try the new one and I am BLOWN AWAY at how absolutely creative and visually appealing this game is. I felt like I was a kid playing an all time classic for the first time. It’s bringing me so much joy!
                        
                        Don't have many gamers in my life. So I figured I would write this just to share how great I thought it is. Anyone else feel the same?
                    </p> --}}

                    @if(!empty($post->post_desc))
                        <p class="post-para">{{ $post->post_desc }}</p>
                    @endif
    
                    {{-- <div class="post-img">
                        <style>
                            .post-img::before {
                                content: "";
                                position: absolute;
                                top: 0;
                                left: 0;
                                height: 100%;
                                width: 100%;
                                background: url('Images/4.jpeg') no-repeat center;
                                background-size: cover;
                                filter: blur(20px); 
                                z-index: 1; 
                            }
                        </style>
    
                        <img src="/Images/4.jpeg" alt="">
                    </div> --}}

                    @if(!empty($post->post_img))
                    <a href="{{ route('comment', ['post_id' => $post->post_id]) }}">
                        <div class="post-img" style="position: relative; display: inline-block; overflow: hidden;">
                            <div style="
                                position: absolute;
                                top: -10%;
                                left: -10%;
                                height: 120%;
                                width: 120%;
                                background: url('{{ asset("storage/" . $post->post_img) }}') no-repeat center;
                                background-size: cover;
                                filter: blur(20px);
                                z-index: 1;
                            "></div>
                            <img src="{{ asset('storage/' . $post->post_img) }}" alt="Post Image" style="position: relative; z-index: 2;">
                        </div>
                    </a>
                @endif
    
                </div> 



                {{-- COMMENTS --}}

                <div class="main-user-comments-zero-div">
                    Comments
                </div>

                {{-- <div class="main-user-comments">
                    <div class="main-user-comments-first-div">
                        <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile Picture">
                        <a href="#">
                            <div class="main-user-comments-first-div-user-name">r/FoodyHub</div>
                        </a>

                        <div>• 22 Hr ago</div>
                    </div>
                    <div class="main-user-comments-second-div">
                        Teri ma ki chut.
                    </div>
                </div> --}}

                @if ($post->comments->isEmpty())
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                        <h3>Looks like there is no comment yet</h3> 
                    </div>
                @else
                    @foreach ($post->comments as $comment)
                        <div class="main-user-comments">
                            <div class="main-user-comments-first-div">
                                <img src="{{ $comment->user->profile_pic ? asset('storage/' . $comment->user->profile_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" alt="Profile Picture">
                                @if(auth()->id() == $comment->user->user_id)
                                    <a href="{{ route('profile') }}">
                                        <div class="main-user-comments-first-div-user-name">{{ $comment->user->user_name }}</div>
                                    </a>
                                @else
                                    <a href="{{ route('outprofile', ['username' => $comment->user->user_name]) }}">
                                        <div>{{ $comment->user->user_name }}</div>
                                    </a>
                                @endif
                                <div>• {{ $comment->created_at->diffForHumans() }}</div>
                            </div>
                            <div class="main-user-comments-second-div">
                                {{ $comment->comment }}
                            </div>
                        </div>
                    @endforeach
                @endif            


            </main>

            <!------------------
            end main
            ------------------->

            <!----------------
            start right main 
            ---------------------->
            <div class="right">

                <div class="top">
                    <button id="menu_bar">
                        <span class="material-symbols-sharp">menu</span>
                    </button>

                    <div class="theme-toggler">
                        <span class="material-symbols-sharp active">light_mode</span>
                        <span class="material-symbols-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p><b>Adhip</b></p>
                            <p>Admin</p>
                            <small class="text-muted"></small>
                        </div>
                        <div class="profile-photo">
                            <img src="/Images/profile-1.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <div class="recent_updates">
                    <h2>Recent Update</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="Pictures/agamani.jpg" alt="" />
                            </div>
                            <div class="message">
                                <p><b>Agamani</b> Recently post a picture</p>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="Pictures/Adhip.jpg" alt="" />
                            </div>
                            <div class="message">
                                <p><b>Adhip</b> Upload profile picture</p>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="Pictures/my.jpg" alt="" />
                            </div>
                            <div class="message">
                                <p><b>Mriganka</b> Comment on Adhip's post</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



            <script src="{{asset('js/admincontent.js')}}"></script>
    </body>

</html>