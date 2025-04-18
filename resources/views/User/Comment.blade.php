<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/comment.css')}}">
        <link rel="stylesheet" href="{{asset('css/preloader.css')}}">
        <link rel="shortcut icon" href="{{asset('/Pictures/inkspire.png')}}" type="image/svg+xml">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Comment</title>

        <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

        <style>
            .section-dropdown-two{
                position: absolute;
                width: 366px;
                left: -7px;
                border-radius: 0px 13px 13px 0px;
                padding: 0;
            }
        </style>

    </head>
    <body>

                <!-- 
         - SECTION PRELOADER
        -->

        <div class="preloader">
            <svg id="preloader" width="240px" height="120px" viewBox="0 0 240 120" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
        
                <path id="loop-normal" class="st1"
                    d="M120.5,60.5L146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0z">
                    <animate attributeName="stroke-dasharray" from="500, 50" to="450 50" begin="0s" dur="2s"
                        repeatCount="indefinite" />
                    <animate attributeName="stroke-dashoffset" from="-40" to="-540" begin="0s" dur="2s"
                        repeatCount="indefinite" />
                </path>
        
                <path id="loop-offset"
                    d="M146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0L120.5,60.5L146.48,87.02z">
                </path>
        
                <path id="socket" d="M7.5,0c0,8.28-6.72,15-15,15l0-30C0.78-15,7.5-8.28,7.5,0z">
                    <animateMotion dur="2s" repeatCount="indefinite" rotate="auto" keyTimes="0;1"
                        keySplines="0.42, 0.0, 0.58, 1.0">
                        <mpath xlink:href="#loop-offset" />
                    </animateMotion>
                </path>
        
                <path id="plug" d="M0,9l15,0l0-5H0v-8.5l15,0l0-5H0V-15c-8.29,0-15,6.71-15,15c0,8.28,6.71,15,15,15V9z">
                    <animateMotion dur="2s" rotate="auto" repeatCount="indefinite" keyTimes="0;1" keySplines="0.42, 0, 0.58, 1">
                        <mpath xlink:href="#loop-normal" />
                    </animateMotion>
                </path>
        
            </svg>

            <script>
                window.addEventListener("load", function () {
                    document.querySelector(".preloader").classList.add("hidden");
                    setTimeout(() => document.querySelector(".preloader").style.display = "none", 500);
                });
            </script>
        </div>

        @if($errors->any() || session('success'))
            <div style="position: fixed; top: 1rem; left: 50%; transform: translateX(-50%); z-index: 9999;">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div style="
                            min-width: 250px;
                            margin-top: 10px;
                            padding: 15px 20px;
                            border-radius: 8px;
                            color: white;
                            background-color: #dc3545;
                            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                            opacity: 0.95;
                            font-weight: 500;
                            animation: fadeOut 5s forwards;
                            text-align: center;
                        ">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                @if(session('success'))
                    <div style="
                        min-width: 250px;
                        margin-top: 10px;
                        padding: 15px 20px;
                        border-radius: 8px;
                        color: white;
                        background-color: #28a745;
                        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                        opacity: 0.95;
                        font-weight: 500;
                        animation: fadeOut 5s forwards;
                        text-align: center;
                    ">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            <style>
                @keyframes fadeOut {
                    0%   { opacity: 1; transform: translateY(0); }
                    80%  { opacity: 1; transform: translateY(0); }
                    100% { opacity: 0; transform: translateY(-20px); }
                }
            </style>

            <script>
                setTimeout(() => {
                    document.querySelectorAll('[style*="animation: fadeOut"]').forEach(el => el.remove());
                }, 6000);
            </script>
        @endif

        <header>
            <a href="/" class="logo"><img class="logo-img" src="/Pictures/inkspire.png"></a>
            <input type="text" placeholder="Search" id="searchInput">

            <div class="menu">

                <!-- 
                - DROPDOWN MESSAGE
                -->

                <div class="sec-center"> 	
                    <input class="dropdown" type="checkbox" id="dropdown1" name="dropdown"/>
                    <label class="for-dropdown" for="dropdown1"> <i class="fa-regular fa-message"></i> </label> 
                    <div class="section-dropdown"> 
                        <h1>Chats</h1> <i href="#" class="fa-brands fa-facebook-messenger" style="top: -32px;"></i>
                    </div>

                    <div class="section-dropdown section-dropdown-two">
                        <h1>Threads</h1>
                        <input type="checkbox" name="section-message" id="section-message" style="display: none;">
                        <div class="section-dropdown-two-body">
                            <label for="section-message" class="chat-button ">Go to Message</label>
                        </div>

                        <div class="section-dropdown-two-body-second">
                            <div class="section-dropdown-two-body-second-img">
                                <img style="width: 82px" src="https://www.redditstatic.com/chat-web/images/welcome-6AUNLRD4.png" alt="">
                            </div>
                            <div class="section-dropdown-two-body-second-para">
                                <p>Welcome to chat</p>
                                <p style="font-weight: 500;">Start a direct or group chat with other users</p>
                            </div>
                            <div class="section-dropdown-two-body-second-button" style="margin-top: 9px;">
                                <button class="chat-button" style="padding-top: 0px;">Start new Chat</button>
                            </div>
                        </div>

                    </div>
                </div>
            
                <a href="/create" style="position: static"><button href="#" class="create"><i class="fa-solid fa-plus"></i> <span>Create</span></button></a>


                <!-- 
                - DROPDOWN2 NOTIFICATION
                -->
            
                <div class="sec-center"> 	
                    <input class="dropdown2" type="checkbox" id="dropdown2" name="dropdown"/>
                    <label class="for-dropdown" for="dropdown2"> <i class="fa-regular fa-bell"></i> </label> 
                    <div class="section-dropdown2"> 
                        <h1>Notifications</h1>

                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>


                <!-- 
                - DROPDOWN3 USER ICON
                -->
            
                <div class="sec-center">    	
                    <input class="dropdown3" type="checkbox" id="dropdown3" name="dropdown"/>
                    <label class="for-dropdown3" for="dropdown3"><button class="dropdown3-click-button"><i class="fa-solid fa-user"></i></button></label> 
                    <p class="dropdown3-floating-message">Open profile menu</p>

                    <div id="section-dropdown3" class="section-dropdown3"> 

                        <div class="section-dropdown3-profile">
                            {{-- <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">  --}}
                            <img src="{{ session('user') && session('user')->profile_pic ? asset('storage/' . session('user')->profile_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"  alt="Profile Picture" >
                            <div class="section-dropdown3-profile-text">
                                <a href="/profile" style="position: unset;">
                                    <button>View Profile</button>
                                </a>
                                {{-- <p>@username_agent07</p> --}}
                                <p class="user_name">
                                    @if(session('user'))
                                        {{ session('user')->user_name }}
                                    @else
                                        Guest
                                    @endif
                                </p>
                            </div>
                        </div>

                        <a href="/editprofile" style="justify-content: start; top: 0; cursor: pointer;" >

                            <button class="section-dropdown3-settings">
                                <span class="section-dropdown3-settings">
                                    <svg rpl="" fill="currentColor" height="20" icon-name="settings-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 20c-.401 0-.802-.027-1.2-.079a1.145 1.145 0 0 1-.992-1.137v-1.073a.97.97 0 0 0-.627-.878A.98.98 0 0 0 6.1 17l-.755.753a1.149 1.149 0 0 1-1.521.1 10.16 10.16 0 0 1-1.671-1.671 1.149 1.149 0 0 1 .1-1.523L3 13.906a.97.97 0 0 0 .176-1.069.98.98 0 0 0-.887-.649H1.216A1.145 1.145 0 0 1 .079 11.2a9.1 9.1 0 0 1 0-2.393 1.145 1.145 0 0 1 1.137-.992h1.073a.97.97 0 0 0 .878-.627A.979.979 0 0 0 3 6.1l-.754-.754a1.15 1.15 0 0 1-.1-1.522 10.16 10.16 0 0 1 1.673-1.676 1.155 1.155 0 0 1 1.522.1L6.1 3a.966.966 0 0 0 1.068.176.98.98 0 0 0 .649-.887V1.216A1.145 1.145 0 0 1 8.8.079a9.129 9.129 0 0 1 2.393 0 1.144 1.144 0 0 1 .991 1.137v1.073a.972.972 0 0 0 .628.878A.977.977 0 0 0 13.905 3l.754-.754a1.152 1.152 0 0 1 1.522-.1c.62.49 1.18 1.05 1.671 1.671a1.15 1.15 0 0 1-.1 1.522L17 6.1a.967.967 0 0 0-.176 1.068.98.98 0 0 0 .887.649h1.073a1.145 1.145 0 0 1 1.137.991 9.096 9.096 0 0 1 0 2.392 1.145 1.145 0 0 1-1.137.992h-1.073A1.041 1.041 0 0 0 17 13.905l.753.755a1.149 1.149 0 0 1 .1 1.521c-.49.62-1.05 1.18-1.671 1.671a1.149 1.149 0 0 1-1.522-.1L13.906 17a.97.97 0 0 0-1.069-.176.981.981 0 0 0-.65.887v1.073a1.144 1.144 0 0 1-.99 1.137A9.431 9.431 0 0 1 10 20Zm-.938-1.307a7.638 7.638 0 0 0 1.875 0v-.982a2.292 2.292 0 0 1 3.853-1.6l.693.694a8.796 8.796 0 0 0 1.326-1.326l-.694-.694a2.29 2.29 0 0 1 1.6-3.851h.982a7.746 7.746 0 0 0 0-1.876h-.982a2.213 2.213 0 0 1-2.034-1.4 2.223 2.223 0 0 1 .438-2.451l.694-.693a8.76 8.76 0 0 0-1.327-1.326l-.692.694a2.22 2.22 0 0 1-2.434.445 2.221 2.221 0 0 1-1.419-2.041v-.979a7.638 7.638 0 0 0-1.875 0v.982a2.213 2.213 0 0 1-1.4 2.034 2.23 2.23 0 0 1-2.456-.438l-.693-.694a8.757 8.757 0 0 0-1.326 1.327l.694.692a2.216 2.216 0 0 1 .445 2.434 2.22 2.22 0 0 1-2.041 1.418h-.982a7.746 7.746 0 0 0 0 1.876h.982a2.213 2.213 0 0 1 2.034 1.4 2.223 2.223 0 0 1-.438 2.451l-.694.693c.394.488.838.933 1.326 1.326l.694-.694a2.218 2.218 0 0 1 2.433-.445 2.22 2.22 0 0 1 1.418 2.041v.983ZM10 13.229a3.23 3.23 0 1 1 0-6.458 3.23 3.23 0 0 1 0 6.458Zm0-5.208a1.979 1.979 0 1 0 0 3.958 1.979 1.979 0 0 0 0-3.958Z"></path>
                                    </svg>
                                    <span style="font-size: 14px; font-weight: 500; color: white;">Settings</span>
                                </span>
                            </button>
                        </a>

                        {{-- <div class="section-dropdown3-logout">
                                <span>
                                    <svg rpl="" fill="currentColor" height="20" icon-name="logout-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.991 10.625H1v-1.25h10.991l-1.933-1.933.884-.884 3 3a.624.624 0 0 1 0 .884l-3 3-.884-.884 1.933-1.933ZM15.375 1h-9.75A2.629 2.629 0 0 0 3 3.625v.792h1.25v-.792A1.377 1.377 0 0 1 5.625 2.25h9.75a1.377 1.377 0 0 1 1.375 1.375v12.75a1.377 1.377 0 0 1-1.375 1.375h-9.75a1.377 1.377 0 0 1-1.375-1.375v-.792H3v.792A2.63 2.63 0 0 0 5.625 19h9.75A2.63 2.63 0 0 0 18 16.375V3.625A2.63 2.63 0 0 0 15.375 1Z"></path>
                                    </svg>
                                    <button type="submit"><span>Log Out</span></button>
                                </span>
                        </div> --}}

                        {{-- <div class="section-dropdown3-logout">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" style="background: none; border: none; cursor: pointer;">
                                    <span>
                                        <svg rpl="" fill="currentColor" height="20" icon-name="logout-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.991 10.625H1v-1.25h10.991l-1.933-1.933.884-.884 3 3a.624.624 0 0 1 0 .884l-3 3-.884-.884 1.933-1.933ZM15.375 1h-9.75A2.629 2.629 0 0 0 3 3.625v.792h1.25v-.792A1.377 1.377 0 0 1 5.625 2.25h9.75a1.377 1.377 0 0 1 1.375 1.375v12.75a1.377 1.377 0 0 1-1.375 1.375h-9.75a1.377 1.377 0 0 1-1.375-1.375v-.792H3v.792A2.63 2.63 0 0 0 5.625 19h9.75A2.63 2.63 0 0 0 18 16.375V3.625A2.63 2.63 0 0 0 15.375 1Z"></path>
                                        </svg>
                                        <span>Log Out</span>
                                    </span>
                                </button>
                            </form>
                        </div> --}}
                        

                        

                    </div>

                </div>
            </div>
        </header> 


        <nav class="sidebar" id="sidebar">
            <div class="sidebar__container">

                <div class="sidebar__content">
                    <div>
                        <h3 class="sidebar__title">MANAGE</h3>

                        <div class="sidebar__list">
                        <a href="/" class="sidebar__link active-link">
                            <i class="fa-solid fa-house"></i>
                            <span>Home</span>
                        </a>
                        
                        <a href="#" class="sidebar__link">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                            <span>Popular</span>
                        </a>

                        <a href="/explore" class="sidebar__link">
                            <i class="fa-solid fa-table"></i>
                            <span>Explore</span>
                        </a>
                        </div>
                    </div>

                    <div>
                        <h3 class="sidebar__title">YOUR COMMUNITIES</h3>

                        <div class="sidebar__list">
                            <a href="/createcommunity" class="sidebar__link">
                                <i class="fa-solid fa-plus"></i>
                                <span>Create Community </span>
                            </a>


                            {{-- @php
                                $userId = session('user_id');

                                $createdCommunities = \App\Models\Communities::where('user_id', $userId)->get();

                                $joinedCommunities = \DB::table('join')
                                    ->join('communities', 'join.community_id', '=', 'communities.community_id')
                                    ->where('join.user_id', $userId)
                                    ->select('communities.community_name', 'communities.community_pic', 'join.created_at as joined_at')
                                    ->get();
                            @endphp --}}

                            @php
                                $userId = session('user_id');

                                $createdCommunities = \App\Models\Communities::where('user_id', $userId)
                                    ->where('community_suspend', 0) 
                                    ->get();

                                $joinedCommunities = \DB::table('join')
                                    ->join('communities', 'join.community_id', '=', 'communities.community_id')
                                    ->where('join.user_id', $userId)
                                    ->where('communities.community_suspend', 0) 
                                    ->select('communities.community_name', 'communities.community_pic', 'join.created_at as joined_at')
                                    ->get();
                            @endphp


                            {{-- @if ($createdCommunities->isNotEmpty())
                                @foreach ($createdCommunities as $community)
                                    <a href="{{ route('show.mycommunity', ['community_name' => $community->community_name]) }}" class="sidebar__link">
                                        <div class="profile-img1">
                                            @if (!empty($community->community_pic))
                                                <img src="{{ asset('storage/' . $community->community_pic) }}" alt="{{ $community->community_name }}">
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Community">
                                            @endif
                                        </div>
                                        <span>{{ $community->community_name }}</span>
                                    </a>
                                @endforeach
                            @endif --}}

                            @if ($createdCommunities->isNotEmpty())
                                @foreach ($createdCommunities as $community)
                                    <a href="{{ route('show.mycommunity', ['community_name' => $community->community_name]) }}" class="sidebar__link">
                                        <div class="profile-img1">
                                            @if (!empty($community->community_pic))
                                                <img src="{{ asset('storage/' . $community->community_pic) }}" alt="{{ $community->community_name }}">
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Community">
                                            @endif
                                        </div>
                                        <span>{{ $community->community_name }}</span>
                                    </a>
                                @endforeach
                            @endif
                            
                        </div>
                    </div>


                    {{-- @if ($joinedCommunities->isNotEmpty())
                        <div>
                            <h3 class="sidebar__title">OTHER COMMUNITIES</h3>
                            <div class="sidebar__list">
                                @foreach ($joinedCommunities as $community)
                                    <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}" class="sidebar__link">
                                        <div class="profile-img1">
                                            @if (!empty($community->community_pic))
                                                <img src="{{ asset('storage/' . $community->community_pic) }}" alt="{{ $community->community_name }}">
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Community">
                                            @endif
                                        </div>
                                        <span>{{ $community->community_name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif --}}


                    @if ($joinedCommunities->isNotEmpty())
                        <div>
                            <h3 class="sidebar__title">OTHER COMMUNITIES</h3>
                            <div class="sidebar__list">
                                @foreach ($joinedCommunities as $community)
                                    <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}" class="sidebar__link">
                                        <div class="profile-img1">
                                            @if (!empty($community->community_pic))
                                                <img src="{{ asset('storage/' . $community->community_pic) }}" alt="{{ $community->community_name }}">
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Community">
                                            @endif
                                        </div>
                                        <span>{{ $community->community_name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

                <div class="sidebar__actions">
                    <button>
                        <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
                        <span>Theme</span>
                        </i>
                    </button>

                    {{-- <button class="sidebar__link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log Out</span>
                    </button> --}}

                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="sidebar__link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Log Out</span>
                        </button>
                    </form>

                </div>
            </div>
        </nav>
   
        <main class="main container" id="main"> 


            <div class="main-user-profile">
                {{-- <img src="/Pictures/userlogo.png" alt=""> --}}

                <div class="main-user-profile-div">
                    @if($post->user->profile_pic)
                        <img src="{{ asset('storage/' . $post->user->profile_pic) }}" alt="Profile Picture" >
                    @else
                        <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Profile Picture">
                    @endif
    
                    <div>
                        <div class="username">
                            {{-- <p>r/Username</p>
                            <p>Just saying</p> --}}
        
                            {{-- <p>r/{{ $post->user->user_name }}</p> --}}
                            @if(auth()->id() == $post->user->user_id)
                                <a href="{{ route('profile') }}">
                                    <span class="username-hover">r/{{ $post->user->user_name }}</span>
                                </a>
                            @else
                                <a href="{{ route('outprofile', ['username' => $post->user->user_name]) }}">
                                    <span class="username-hover">r/{{ $post->user->user_name }}</span>
                                </a>
                            @endif
                            @if($post->community_id) 
                                @php
                                    $community = \App\Models\Communities::find($post->community_id);
                                @endphp
                                @if($community && $community->user_id == session('user_id'))
                                    <a href="{{ route('show.mycommunity', ['community_name' => $community->community_name]) }}">
                                        <span class="username-hover"> | {{ $community->community_name }}</span>
                                    </a>
                                @else
                                    <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                                        <span class="username-hover"> | {{ $community ? $community->community_name : 'Unknown Community' }}</span>
                                    </a>
                                @endif
                            @endif
                        </div>
                        <p style=" font-weight: 600; font-size: 15px; margin-left: 6px; margin-top: 3px;">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>

                @if(auth()->id() == $post->user->user_id)
                    <div class="sec-center"> 	
                        <input class="dropdown4" type="checkbox" id="dropdown4" name="dropdown"/>
                        <label class="for-dropdown" for="dropdown4"> <i class="fa-solid fa-ellipsis"></i> </label> 
                        <div class="section-dropdown4"> 

                    
                            <a href="{{ route('profile.edit', $post->post_id) }}">
                                <div class="profile-container1">
                                    <svg rpl="" fill="currentColor" height="14" icon-name="edit-outline" viewBox="0 0 20 20" width="14" xmlns="http://www.w3.org/2000/svg"> <!--?lit$342583788$--><!--?lit$342583788$--><path d="m18.236 3.158-1.4-1.4a2.615 2.615 0 0 0-3.667-.021L1.336 13.318a1.129 1.129 0 0 0-.336.8v3.757A1.122 1.122 0 0 0 2.121 19h3.757a1.131 1.131 0 0 0 .8-.337L18.256 6.826a2.616 2.616 0 0 0-.02-3.668ZM5.824 17.747H2.25v-3.574l9.644-9.435L15.259 8.1l-9.435 9.647ZM17.363 5.952l-1.23 1.257-3.345-3.345 1.257-1.23a1.362 1.362 0 0 1 1.91.01l1.4 1.4a1.364 1.364 0 0 1 .008 1.908Z"></path><!--?--> <svg rpl="" fill="currentColor" height="20" icon-name="edit-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"> <!--?lit$342583788$--><!--?lit$342583788$--><path d="m18.236 3.158-1.4-1.4a2.615 2.615 0 0 0-3.667-.021L1.336 13.318a1.129 1.129 0 0 0-.336.8v3.757A1.122 1.122 0 0 0 2.121 19h3.757a1.131 1.131 0 0 0 .8-.337L18.256 6.826a2.616 2.616 0 0 0-.02-3.668ZM5.824 17.747H2.25v-3.574l9.644-9.435L15.259 8.1l-9.435 9.647ZM17.363 5.952l-1.23 1.257-3.345-3.345 1.257-1.23a1.362 1.362 0 0 1 1.91.01l1.4 1.4a1.364 1.364 0 0 1 .008 1.908Z"></path><!--?--> </svg></svg>
                                    <div class="profile-info1">
                                        <span  style="font-size: 14px;     margin-left: 23px; margin-top: 2px;">Edit</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" onclick="confirmDelete({{ $post->post_id }})">
                                <div class="profile-container1">
                                    <svg rpl="" fill="currentColor" height="14" icon-name="delete-outline" viewBox="0 0 20 20" width="14" xmlns="http://www.w3.org/2000/svg"> <!--?lit$342583788$--><!--?lit$342583788$--><path d="M15.751 6.023 17 6.106l-.761 11.368a2.554 2.554 0 0 1-.718 1.741A2.586 2.586 0 0 1 13.8 20H6.2a2.585 2.585 0 0 1-1.718-.783 2.553 2.553 0 0 1-.719-1.737L3 6.106l1.248-.083.761 11.369c-.005.333.114.656.333.908.22.252.525.415.858.458h7.6c.333-.043.64-.207.859-.46.22-.254.338-.578.332-.912l.76-11.363ZM18 2.983v1.243H2V2.983h4v-.372A2.737 2.737 0 0 1 6.896.718 2.772 2.772 0 0 1 8.875.002h2.25c.729-.03 1.44.227 1.979.716.538.488.86 1.169.896 1.893v.372h4Zm-10.75 0h5.5v-.372a1.505 1.505 0 0 0-.531-1.014 1.524 1.524 0 0 0-1.094-.352h-2.25c-.397-.03-.79.097-1.094.352-.304.256-.495.62-.531 1.014v.372Z"></path><!--?--> </svg>
                                    <div class="profile-info1">
                                        <span style="font-size: 14px;     margin-left: 23px;  margin-top: 2px;"> Delete</span>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                @endif
            </div>

            @if($post->post_caption && $post->post_img)
                {{-- <div class="main-user-topic">
                    Chirag Paswan and Vishal are cousins. Here is an old video (6yrs back) of them celebrating Ganesh festival. It is sad people speculated them to be a couple ...
                </div> --}}
                <div class="main-user-topic">
                    {{ $post->post_caption }}
                </div>

                <div class="main-user-img">
                    <div class="main-user-img-inner">
                        {{-- <img class="main-user-img-inner-img" id="main-img" src="https://scontent.fbom3-1.fna.fbcdn.net/v/t39.30808-6/474934134_1255689052167509_2545385852172680867_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=833d8c&_nc_ohc=AT1uI4ReFE4Q7kNvgGhr6ad&_nc_oc=AdgfGPc_Bwxm_xROCu30CkFwef6Y_uaKEVq9UWgAjPVfzdFi28A9txjJlx3ZCmHeoKBUUqn7oRZZRS8dZ4OAZp5m&_nc_zt=23&_nc_ht=scontent.fbom3-1.fna&_nc_gid=Z35UsTZhNS2n7Ghajdj0Mw&oh=00_AYEWhUe6Ey973moF9mMBkk5-b_qR8aUIadRUuENK7BB4_Q&oe=67DA2682" alt=""> --}}
                        <img class="main-user-img-inner-img" id="main-img" src="{{ asset('storage/' . $post->post_img) }}" alt="">

                    </div>
                </div>

            @elseif($post->post_caption && $post->post_desc )

                {{-- <div class="main-user-topic">
                    Chirag Paswan and Vishal are cousins. Here is an old video (6yrs back) of them celebrating Ganesh festival. It is sad people speculated them to be a couple ...
                </div> --}}

                <div class="main-user-topic">
                    {{ $post->post_caption }}
                </div>

                {{-- <p class="post-para">Ok so I am 30 years old. Turned 30 back in March and I bought myself a PS5 after my 4 shit out finally after 12 years. I was excited about all the big games but was pleasantly entertained with Astro Bot. So clever! My kids would watch me play before bed and they just loved it. Never thought a sequel would come out. Finally got to try the new one and I am BLOWN AWAY at how absolutely creative and visually appealing this game is. I felt like I was a kid playing an all time classic for the first time. It’s bringing me so much joy! Don’t have many gamers in my life. So I figured I would write this just to share how great I thought it is. Anyone else feel the same?</p> --}}
                <p class="post-para">{{ $post->post_desc }}</p>


            @elseif($post->post_caption )
                {{-- <div class="main-user-topic">
                    Chirag Paswan and Vishal are cousins. Here is an old video (6yrs back) of them celebrating Ganesh festival. It is sad people speculated them to be a couple ...
                </div> --}}
                <div class="main-user-topic">
                    {{ $post->post_caption }}
                </div>
            @endif 
            

            <div class="main-user-comments-zero-div">
                Comments
            </div>

            <div class="main-user-comments">
                <button onclick="toggleCommentBox()" class="main-user-comments-button">Add a comment</button>
            </div>

            <div class="user-comment" id="commentBox">
                {{-- <form action="">
                    <textarea name="" class="user-comments" id="" cols="30" rows="10" placeholder="Write you comment"></textarea>
                    <button type="submit" class="user-comment-submit">Comment</button>
                    <button type="button" class="user-comment-submit cancel" onclick="hideCommentBox()">Cancel</button>
                </form> --}}
                <form action="{{ route('store.comment', ['post_id' => $post->post_id]) }}" method="POST">
                    @csrf
                    <textarea name="comment" class="user-comments" id="comment" cols="30" rows="10" placeholder="Write your comment" required></textarea>
                    <button type="submit" class="user-comment-submit">Comment</button>
                    <button type="button" class="user-comment-submit cancel" onclick="hideCommentBox()">Cancel</button>
                </form>
            </div>

            <div class="main-user-comments">

                {{-- <div class="main-user-comments-first-div">
                    <img src="https://www.redditstatic.com/avatars/defaults/v2/avatar_default_0.png" alt="">
                    <div>Username</div>
                    <div>• 5 hour ago</div>
                </div>
                <div class="main-user-comments-second-div">
                    You are so trustworthy; I always believe what you say. Everything seems brighter when you are around. Even the things you don't like about yourself make you interesting. I know that you will always have my back, because that is the kind of person you are.
                </div>

            </div>


            <div class="main-user-comments">

                <div class="main-user-comments-first-div">
                    <img src="https://www.redditstatic.com/avatars/defaults/v2/avatar_default_0.png" alt="">
                    <div>Username</div>
                    <div>• 5 hour ago</div>
                </div>
                <div class="main-user-comments-second-div">
                    You are so trustworthy; I always believe what you say. Everything seems brighter when you are around. Even the things you don't like about yourself make you interesting. I know that you will always have my back, because that is the kind of person you are.
                </div>

            </div>


            <div class="main-user-comments">

                <div class="main-user-comments-first-div">
                    <img src="https://www.redditstatic.com/avatars/defaults/v2/avatar_default_0.png" alt="">
                    <div>Username</div>
                    <div>• 5 hour ago</div>
                </div>
                <div class="main-user-comments-second-div">
                    You are so trustworthy; I always believe what you say. Everything seems brighter when you are around. Even the things you don't like about yourself make you interesting. I know that you will always have my back, because that is the kind of person you are.
                </div>

            </div> --}}

            @if ($comments->isEmpty())
                <div class="not-found">
                    <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                    <h3>Looks like there is no comment yet</h3> 
                </div>
            @else
                @foreach ($comments as $comment)
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

            {{-- <div class="not-found">
                <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                <h3>Looks like there is no comment yet</h3> 
            </div> --}}

         </main>



        <script src="{{asset('js/comment.js')}}"></script>
    </body>
</html> 