<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/viewmember.css')}}">
        <link rel="stylesheet" href="{{asset('css/preloader.css')}}">
        <link rel="shortcut icon" href="{{asset('/Pictures/inkspire.png')}}" type="image/svg+xml">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Welcome</title>

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

        <!-- 
         - SECTION NAVBAR
        -->

        @if($errors->any() || session('success') || session('error'))
            <div style="position: fixed; top: 1rem; left: 50%; transform: translateX(-50%); z-index: 9999;">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div style="
                            min-width: 250px;
                            margin-top: 10px;
                            padding: 15px 20px;
                            border-radius: 8px;
                            color: white;
                            background-color: #dc3545; /* Error color */
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
                        background-color: #28a745; /* Success color */
                        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                        opacity: 0.95;
                        font-weight: 500;
                        animation: fadeOut 5s forwards;
                        text-align: center;
                    ">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div style="
                        min-width: 250px;
                        margin-top: 10px;
                        padding: 15px 20px;
                        border-radius: 8px;
                        color: white;
                        background-color: #dc3545; /* Error color */
                        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                        opacity: 0.95;
                        font-weight: 500;
                        animation: fadeOut 5s forwards;
                        text-align: center;
                    ">
                        {{ session('error') }}
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
        
        <!-- 
         - SECTION SIDEBAR
        -->
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
            
            <div>
                <div class="comm-info">
                    {{-- <div class="info-cover">
                        <div class="info-cover-inner">
                            @if($user->cover_img)
                                <img class="info-cover-img" id="infoImage" src="{{ asset('storage/' . $user->cover_img) }}" alt="Cover Image">
                            @else
                                <img class="info-cover-img" id="infoImage" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Cover Image">
                            @endif
                        </div>
                    </div> --}}

                    @if($user->cover_img)
                        <div class="info-cover">
                            <div class="info-cover-inner">
                                <img class="info-cover-img" id="infoImage" src="{{ asset('storage/' . $user->cover_img) }}" alt="Cover Image">
                            </div>
                        </div>
                    @endif
                    
                    <div class="text-info">
                        <div class="profile-img3">
                            {{-- <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Profile"> --}}
                            @if($user->profile_pic)
                                <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                            @else
                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Profile">
                            @endif
                        </div>
                    
                        <div class="profile-info1">
                            {{-- <h1>r/adhiphalder</h1>  --}}
                            <h1>r/{{ $user->user_name }}</h1> 
                            {{-- <p class="profile-info1-p">Priya is my love</p> --}}
                            @if($user->bio)
                                <p class="profile-info1-p" style="margin-top: 4px">{{ $user->bio }}</p>
                            @endif
                        </div>
                    </div>


                    @if(auth()->check() && auth()->user()->isFollowing($user->user_id))
                        <form id="unfollow-form-{{ $user->user_id }}" action="{{ route('unfollow', ['user_id' => $user->user_id]) }}" method="POST" class="unfollow-form">
                            @csrf
                            <button type="button" class="joined" onclick="unfollowUser ('{{ $user->user_id }}')">
                                <span>Unfollow</span>
                            </button>
                        </form>
                    @else
                        <form action="{{ route('follow', ['user_id' => $user->user_id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="join" style="width :87px;"><span>Follow</span></button>
                        </form>
                    @endif

                </div>
                {{-- <p class="comm-info-span">Members</p> --}}

                {{-- <div class="com-follower">

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/koyelmallick</span></a>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button" onclick="toggleFollow(this)">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/adhiphalder</span></a>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/mrigankaadhikary</span></a>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/toushikmehmood</span></a>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/koyelmallick</span></a>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/adhiphalder</span></a>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/mrigankaadhikary</span></a>
                            </div>
                        </div>
                        <a href="#"><button onclick="toggleButton(this)" class="com-follower-profile-button">Follow</button></a>
                    </div>

                    <div class="com-follower-profile">
                        <div class="com-follower-profile-text">
                            <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <div class="com-follower-profile-text-inner">
                                <a href="#"><span>r/toushikmehmood</span></a>
                            </div>
                        </div>
                        <a href="#"><button class="com-follower-profile-button">Follow</button></a>
                    </div>

                </div> --}}


                {{-- <div class="com-follower">
                    @foreach($followers as $follow)
                        <div class="com-follower-profile">
                            <div class="com-follower-profile-text">
                                @if($follow->follower->profile_pic)
                                    <img class="com-follower-profile-img" src="{{ $follow->follower->profile_pic }}" alt="Profile Picture">
                                @else
                                    <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Profile Picture">
                                @endif
                                <div class="com-follower-profile-text-inner">
                                    <a href="#"><span>{{ $follow->follower->user_name }}</span></a>
                                </div>
                            </div>
                            @if(Auth::check() && !Auth::user()->isFollowing($follow->follower->user_id))
                                <a href="#">
                                    <button class="com-follower-profile-button" onclick="toggleFollow(this, '{{ route('follow', $follow->follower->user_id) }}')">Follow</button>
                                </a>
                            @else
                                <button class="com-follower-profile-button" disabled>Following</button>
                            @endif
                        </div>
                    @endforeach
                        
                </div>
                <div class="not-found">
                    <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="">
                    <h3>Looks like you haven't do anything yet</h3> 
                </div> --}}

                @if(!$followers->isEmpty())
                    <p class="comm-info-span">Followers</p>
                
                    <div class="com-follower">
                        @foreach($followers as $follow)
                            <div class="com-follower-profile">
                                <div class="com-follower-profile-text">

                                    @if($follow->follower->profile_pic)
                                        <img class="com-follower-profile-img" src="{{ asset('storage/' . $follow->follower->profile_pic) }}" alt="Profile Picture">
                                    @else
                                        <img class="com-follower-profile-img" src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Profile Picture">
                                    @endif
                                    <div class="com-follower-profile-text-inner">
                                        @if(Auth::check() && Auth::user()->user_name == $follow->follower->user_name)
                                            <a href="{{ route('profile') }}">
                                                <span class="com-follower-profile-text-inner-span">{{ $follow->follower->user_name }}</span>
                                            </a>
                                        @else
                                            <a href="{{ route('user.outsiderProfile', ['username' => $follow->follower->user_name]) }}">
                                                <span class="com-follower-profile-text-inner-span">{{ $follow->follower->user_name }}</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                
                                @if(Auth::check() && Auth::id() != $follow->follower->user_id)
                                    @if(!Auth::user()->isFollowing($follow->follower->user_id))
                                        <form action="{{ route('follow', ['user_id' => $follow->follower->user_id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="com-follower-profile-button">Follow</button>
                                        </form>
                                    @else
                                        <form id="unfollow-form-{{ $follow->follower->user_id }}" action="{{ route('unfollow', ['user_id' => $follow->follower->user_id]) }}" method="POST" class="unfollow-form">
                                            @csrf
                                            <button type="button" class="com-follower-profile-button" onclick="unfollowUser('{{ $follow->follower->user_id }}')">Unfollow</button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="not-found">
                        <img src="https://www.redditstatic.com/shreddit/assets/hmm-snoo.png" alt="Not Found">
                        <h3>Looks like there is no followers yet</h3> 
                    </div>
                @endif
            


            </div>

        </main>
        

        <script src="{{asset('js/viewmem.js')}}"></script>
    </body>
</html> 