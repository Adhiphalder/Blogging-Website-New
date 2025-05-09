<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/create_community.css')}}">
        <link rel="stylesheet" href="{{asset('css/preloader.css')}}">
        <link rel="shortcut icon" href="{{asset('/Pictures/inkspire.png')}}" type="image/svg+xml">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Create Community</title>

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

        {{-- <nav  class="sidebar" id="sidebar">

            <div class="sidebar__container">
   
                <div class="sidebar__content">
                    <div>
                       <h3 class="sidebar__title">MANAGE</h3>
     
                       <div class="sidebar__list">
                          <a href="#" class="sidebar__link active-link">
                             <i class="fa-solid fa-house"></i>
                             <span>Home</span>
                          </a>
                          
                          <a href="#" class="sidebar__link">
                              <i class="fa-solid fa-arrow-trend-up"></i>
                             <span>Popular</span>
                          </a>
     
                          <a href="#" class="sidebar__link">
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
                         <a href="#" class="sidebar__link">
                            <div class="profile-img1">
                                <img src="" alt="">
                            </div>
                            <span>Community 1</span>
                         </a>
  
                           
  
                      </div>
                   </div>
     
                    <div>
                       <h3 class="sidebar__title">OTHER COMMUNITIES</h3>
     
                       <div class="sidebar__list">
                          <a href="#" class="sidebar__link">
                             <div class="profile-img1"></div>
                             <span>Community 1</span>
                          </a>
  
                          <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 2</span>
                           </a>
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 3</span>
                           </a>    
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 4</span>
                           </a>    
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 5</span>
                           </a>    
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 6</span>
                           </a>    
  
                           <a href="#" class="sidebar__link">
                              <div class="profile-img1"></div>
                              <span>Community 7</span>
                           </a>    
  
                       </div>
                    </div>
                 </div>
    
                <div class="sidebar__actions">
                   <button>
                      <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
                         <span>Theme</span>
                      </i>
                   </button>

                   <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="sidebar__link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                         <span>Log Out</span>
                      </button>
                  </form>

                </div>
            </div>

        </nav> --}}

        <nav  class="sidebar" id="sidebar">

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
                         @foreach($createdCommunities as $navCommunity)
                            <a href="{{ route('show.mycommunity', $navCommunity->community_name) }}" class="sidebar__link">
                                <div class="profile-img1">
                                    <img src="{{ $navCommunity->community_pic ? asset('storage/' . $navCommunity->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" alt="Community Picture">
                                </div>
                                <span>{{ $navCommunity->community_name }}</span>
                            </a>
                        @endforeach
  
                           
  
                      </div>
                   </div>

                    @if($joinedCommunities->isNotEmpty())
                        <div>
                            <h3 class="sidebar__title">OTHER COMMUNITIES</h3>
                            <div class="sidebar__list">
                                @foreach($joinedCommunities as $joinedCommunity)
                                    <a href="{{ route('show.community', $joinedCommunity->community_name) }}" class="sidebar__link">
                                        <div class="profile-img1">
                                            <img src="{{ $joinedCommunity->community_pic ? asset('storage/' . $joinedCommunity->community_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" alt="Community Picture">
                                        </div>
                                        <span>{{ $joinedCommunity->community_name }}</span>
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
        

        <!-- 
         - SECTION MAIN
        -->
        
        <main class="main container" id="main">

            {{-- <div class="main-container"> --}}


                {{-- <form action="" method="get">
                    <div id="main-form1">

            
                        <h3 class="main-h3">Tell us about your community</h3>
                        <p>A name and description help people understand what your community is all about.</p>
                        <input type="text" id="main-h3-input-first" placeholder="Community Name" maxlength="17" required>
                        <textarea name="" class="main-form1-text" id="" placeholder="Description" maxlength="252" required></textarea>
                        <div class="main-btn-box">
                            <button type="button" id="next1">Next</button>
                        </div>
            
                    </div>
            
                    <div id="main-form2">

            
                        <h3 class="main-h3">Style Your Community</h3>
                        <p>Adding visual flair will catch new members attention and help establish your community’s culture! You can update this at any time.</p>
                        <div class="main-form2-first">
                            <span style="font-size: 14.5px; display: flex;align-items: center;">Banner</span>
                            <label class="main-form2-first-file-lable" for="main-form2-first-file">
                                <svg rpl="" fill="white" height="20" icon-name="image-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 4a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm0 4.75a1.75 1.75 0 1 1 0-3.5 1.75 1.75 0 0 1 0 3.5Z"></path><path d="M17.375 1H2.625A1.627 1.627 0 0 0 1 2.625v14.75A1.627 1.627 0 0 0 2.625 19h14.75A1.627 1.627 0 0 0 19 17.375V2.625A1.627 1.627 0 0 0 17.375 1ZM2.25 17.375v-2.683L4.9 12.04a2.332 2.332 0 0 1 3.3 0l5.71 5.71H2.625a.375.375 0 0 1-.375-.375Zm15.5 0a.375.375 0 0 1-.375.375h-1.7l-6.6-6.594a3.582 3.582 0 0 0-5.063 0L2.25 12.925v-10.3a.375.375 0 0 1 .375-.375h14.75a.375.375 0 0 1 .375.375v14.75Z"></path><!--?-->
                                </svg>
                                <span>Add</span>
                            </label>
                            <input type="file" id="main-form2-first-file" placeholder="Last Name" required>
                        </div>
    
                        <div class="main-form2-sec">
                            <span style="font-size: 14.5px; display: flex;align-items: center;">Profile</span>
                            <label class="main-form2-sec-file-label" for="main-form2-sec-file">
                                <svg rpl="" fill="white" height="20" icon-name="image-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 4a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm0 4.75a1.75 1.75 0 1 1 0-3.5 1.75 1.75 0 0 1 0 3.5Z"></path><path d="M17.375 1H2.625A1.627 1.627 0 0 0 1 2.625v14.75A1.627 1.627 0 0 0 2.625 19h14.75A1.627 1.627 0 0 0 19 17.375V2.625A1.627 1.627 0 0 0 17.375 1ZM2.25 17.375v-2.683L4.9 12.04a2.332 2.332 0 0 1 3.3 0l5.71 5.71H2.625a.375.375 0 0 1-.375-.375Zm15.5 0a.375.375 0 0 1-.375.375h-1.7l-6.6-6.594a3.582 3.582 0 0 0-5.063 0L2.25 12.925v-10.3a.375.375 0 0 1 .375-.375h14.75a.375.375 0 0 1 .375.375v14.75Z"></path><!--?-->
                                </svg>
                                <span class="">Add</span>
                            </label>
                            <input type="file" id="main-form2-sec-file" placeholder="Last Name" required>
                        </div>    
                        
                        <div class="main-form2-img-show">
                            <div class="main-form2-img-show-first">
                                <img src="" alt="">
                            </div>
                            <div class="main-form2-img-show-sec">
                                <img src="" alt="">
                                <span></span>
                            </div>
                            <div class="main-form2-img-show-third">
                                <span></span>
                            </div>
                        </div>
            
                        <div class="main-btn-box">
                            <button type="button" id="back1">Back</button>
                            <button type="button" id="next2">Next</button>
            
                        </div>
    
            
                    </div>
            
                    <div id="main-form3">

            
                        <h3 class="main-h3">Select Topics</h3>
                        <div class="slide-container">
    
                            <div class="main-slidebar">
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-games">
                                <label class="identifier-button" for="main-form3-games">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-videogaming-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.929 14.17 18.277 6.6a4.631 4.631 0 0 0-4.52-3.6H5.702a4.623 4.623 0 0 0-4.58 3.908L.034 14.387a3.134 3.134 0 0 0 .735 2.5 3.227 3.227 0 0 0 5.553-1.284l.39-1.635h5.794l.39 1.635A3.2 3.2 0 0 0 16.01 18h.782a3.211 3.211 0 0 0 3.123-2.444c.109-.455.114-.929.015-1.386Zm-1.6 1.85a1.964 1.964 0 0 1-1.54.73h-.781a1.947 1.947 0 0 1-1.9-1.453l-.63-2.476H5.74L5.11 15.3a1.947 1.947 0 0 1-1.9 1.453 1.974 1.974 0 0 1-1.5-.678 1.862 1.862 0 0 1-.443-1.506l1.09-7.481A3.366 3.366 0 0 1 5.7 4.25h8.062a3.373 3.373 0 0 1 3.3 2.614l1.65 7.573a1.877 1.877 0 0 1-.383 1.583h-.001Z"></path><path d="M6.256 6.212h-1.25v1.776h-1.73v1.25h1.73v1.622h1.25V9.238h1.73v-1.25h-1.73V6.212Z"></path><path d="M11.82 8.81a1 1 0 1 0 1.71.71 1.001 1.001 0 0 0-.3-.71 1.034 1.034 0 0 0-1.41 0Z"></path><path d="M15.23 6.85a.875.875 0 0 0-.32-.22c-.246-.1-.522-.1-.77 0a.875.875 0 0 0-.32.22.975.975 0 0 0 0 1.41 1 1 0 0 0 1.41 0 1.03 1.03 0 0 0 .22-1.09.877.877 0 0 0-.22-.32Z"></path>
                                    </svg>
                                    <span>Games</span>
    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-technologies">
                                <label class="identifier-button" for="main-form3-technologies">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-technology-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.875 7h-3.75A1.127 1.127 0 0 0 7 8.125v3.75A1.127 1.127 0 0 0 8.125 13h3.75A1.127 1.127 0 0 0 13 11.875v-3.75A1.127 1.127 0 0 0 11.875 7Zm-.125 4.75h-3.5v-3.5h3.5v3.5Z"></path><path d="M19 7.625v-1.25h-2v-1.75A1.627 1.627 0 0 0 15.375 3h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75A1.627 1.627 0 0 0 3 4.625v1.75H1v1.25h2v1.75H1v1.25h2v1.75H1v1.25h2v1.75A1.627 1.627 0 0 0 4.625 17h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75A1.627 1.627 0 0 0 17 15.375v-1.75h2v-1.25h-2v-1.75h2v-1.25h-2v-1.75h2Zm-3.25 7.75a.375.375 0 0 1-.375.375H4.625a.375.375 0 0 1-.375-.375V4.625a.375.375 0 0 1 .375-.375h10.75a.375.375 0 0 1 .375.375v10.75Z"></path>
                                    </svg>
                                    <span>Technologies</span>                                
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-movies">
                                <label class="identifier-button" for="main-form3-movies">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-movies-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.375 8H6.45L17.3 5.093a.625.625 0 0 0 .44-.765L16.709.464a.62.62 0 0 0-.522-.459.616.616 0 0 0-.244.017L.488 4.162a.624.624 0 0 0-.441.766l.969 3.618A.527.527 0 0 0 1 8.625v8.75A2.629 2.629 0 0 0 3.625 20h12.75A2.628 2.628 0 0 0 19 17.375v-8.75A.625.625 0 0 0 18.375 8ZM8.06 6.275l-2.75.737v-2.7a.61.61 0 0 0-.028-.135l2.778-.744v2.842Zm1.25-3.182 2.75-.737V5.2l-2.75.737V3.093Zm7.063.954-3.063.82V2.022l2.35-.63.713 2.656ZM4.06 4.5v2.807c0 .013.006.025.007.038l-1.94.52-.712-2.657L4.06 4.5ZM17.75 17.375a1.377 1.377 0 0 1-1.375 1.375H3.625a1.377 1.377 0 0 1-1.375-1.375V9.25h15.5v8.125Z"></path>
                                    </svg>
                                    <span>Movies</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-travel">
                                <label class="identifier-button" for="main-form3-travel">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-travel-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m6.447 8.472-.309.372-.479.575L1.75 5.548a.626.626 0 0 1-.015-.87A3.268 3.268 0 0 1 5.16 3.9l3.867 1.59c-.292.323-.57.657-.857.984L4.711 5.068a1.976 1.976 0 0 0-1.565.106l3.301 3.298Zm.344 10.833a1.123 1.123 0 0 0 .815-.722 4.965 4.965 0 0 0-.129-3.446l2.123-1.75 5.328 5.323.442-.442a3.265 3.265 0 0 0 .747-3.425l-2.126-5.221a122.4 122.4 0 0 0 2.568-2.443 12.172 12.172 0 0 0 2.623-3.9A1.875 1.875 0 0 0 16.7.828l-.055.024a12.167 12.167 0 0 0-3.74 2.553l-.172.17c-1.7 1.7-3.339 3.5-4.873 5.343l-3 3.607a4.959 4.959 0 0 0-3.448-.13A1.128 1.128 0 0 0 1 14.255L5.746 19a1.122 1.122 0 0 0 1.045.305Zm-2.42-5.63a1.11 1.11 0 0 0 1.387-.27l3.067-3.688a76.94 76.94 0 0 1 4.8-5.257l.172-.17A10.9 10.9 0 0 1 17.148 2l.057-.024a.606.606 0 0 1 .686.127.614.614 0 0 1 .138.69 10.909 10.909 0 0 1-2.354 3.5c-.722.723-2.06 1.97-2.6 2.473a1.111 1.111 0 0 0-.274 1.245l2.15 5.279a2 2 0 0 1-.095 1.579L10.4 12.422a1.123 1.123 0 0 0-1.51-.072L6.6 14.24a1.113 1.113 0 0 0-.272 1.392c.31.742.366 1.566.161 2.344l-4.464-4.463a3.655 3.655 0 0 1 2.345.163Z"></path>
                                    </svg>
                                    <span>Travel</span>
                                    
                                </label>
    
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-music">
                                <label class="identifier-button" for="main-form3-music">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-music-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.741 10.094h-.124A1.587 1.587 0 0 0 3 11.645v4.708a1.582 1.582 0 0 0 1.617 1.541h.124a2.543 2.543 0 0 0 2.609-2.467v-2.866a2.544 2.544 0 0 0-2.609-2.467ZM6.1 15.427a1.3 1.3 0 0 1-1.359 1.217h-.124a.336.336 0 0 1-.367-.291v-4.708a.344.344 0 0 1 .367-.3h.124A1.3 1.3 0 0 1 6.1 12.561v2.866ZM0 10.941h1.25v5.874H0v-5.874Zm17.75-.841v-.623A7.51 7.51 0 0 0 10 2.25a7.511 7.511 0 0 0-7.75 7.227v.623H1v-.623A8.76 8.76 0 0 1 10 1a8.76 8.76 0 0 1 9 8.477v.623h-1.25Zm-2.367-.008h-.124a2.544 2.544 0 0 0-2.609 2.467v2.866a2.543 2.543 0 0 0 2.609 2.467h.124A1.582 1.582 0 0 0 17 16.353v-4.708a1.587 1.587 0 0 0-1.617-1.551v-.002Zm.367 6.259a.336.336 0 0 1-.367.291h-.124a1.3 1.3 0 0 1-1.359-1.215v-2.866a1.3 1.3 0 0 1 1.359-1.217h.124a.344.344 0 0 1 .367.3v4.707Zm4.25-5.41v5.874h-1.25v-5.874H20Z"></path>
                                    </svg>
                                    <span>Music</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-education">
                                <label class="identifier-button" for="main-form3-education">
     
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-reading-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.375 2h-7.292A2.688 2.688 0 0 0 10 3a2.688 2.688 0 0 0-2.083-1H.625A.625.625 0 0 0 0 2.625v14.75A.625.625 0 0 0 .625 18h7.917v-1.25H1.25V3.25h6.667a1.465 1.465 0 0 1 1.458 1.469v11.093h1.25V4.719a1.465 1.465 0 0 1 1.458-1.469h6.667v13.5h-6.667a2.64 2.64 0 0 0-2.708 2.625V20h1.25v-.625A1.388 1.388 0 0 1 12.083 18h7.292a.624.624 0 0 0 .625-.625V2.625A.625.625 0 0 0 19.375 2Z"></path>
                                    </svg>
                                    <span>Education</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-sport">
                                <label class="identifier-button" for="main-form3-sport">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-sports-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0ZM4.124 16.465l1.259-3.007a9.906 9.906 0 0 0 .261-6.964l-1.186.4a8.656 8.656 0 0 1-.228 6.087l-1.046 2.5a8.75 8.75 0 1 1 13.632 0l-1.046-2.5a8.653 8.653 0 0 1-.228-6.086l-1.186-.4a9.906 9.906 0 0 0 .261 6.964l1.259 3.007a8.7 8.7 0 0 1-11.752-.001Z"></path>
                                    </svg>
                                    <span>Sport</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-news">
                                <label class="identifier-button" for="main-form3-news">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-news-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.875 2H3.1v13.87a.9.9 0 0 1-.925.88.9.9 0 0 1-.925-.88V3H0v12.87a2.149 2.149 0 0 0 2.081 2.121V18h16.794A1.126 1.126 0 0 0 20 16.874V3.126A1.126 1.126 0 0 0 18.875 2Zm-.125 14.75H4.15c.13-.275.199-.576.2-.88V3.25h14.4v13.5ZM13.029 9h3.849v1.25h-3.849V9Zm-6.911 4.25V12H10v1.25H6.118ZM13.029 12h3.849v1.25h-3.849V12Zm3.847-4.75H6.118V6h10.758v1.25Zm-6.876 3H6.118V9H10v1.25Z"></path>
                                    </svg>
                                    <span>News & Politics</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-business">
                                <label class="identifier-button" for="main-form3-business">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-business-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.25 19H1v-4.5h1.25V19Zm4-7H5v7h1.25v-7Zm8 0H13v7h1.25v-7Zm4-5H17v12h1.25V7ZM6 7.557l3.206 3.2a1.126 1.126 0 0 0 1.59 0l8.647-8.646-.884-.884L10 9.79l-3.2-3.2a1.153 1.153 0 0 0-1.59 0L.559 11.231l.884.884L6 7.557Zm4.25 6.943H9V19h1.25v-4.5Z"></path>
                                    </svg>
                                    <span>Business & Finance</span>
                                    
                                </label>
    
                            </div>  
                                
                        </div>
            
                        <div class="main-btn-box">
                            <button type="button" id="back2">Back</button>
                            <button type="submit" value="submit">Submit</button>
            
                        </div>
            
                    </div>
                </form> --}}

                {{-- <form action="{{ route('store.community') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="main-form1">

            
                        <h3 class="main-h3">Tell us about your community</h3>
                        <p>A name and description help people understand what your community is all about.</p>
                        <input type="text"  name="community_name" id="main-h3-input-first" placeholder="Community Name" maxlength="17" required>
                        <textarea name="community_description" class="main-form1-text" id="" placeholder="Description" maxlength="252" required></textarea>
                        @if ($errors->has('community_name'))
                            <div class="alert alert-danger">{{ $errors->first('community_name') }}</div>
                        @endif
                        @if ($errors->has('community_description'))
                            <div class="alert alert-danger">{{ $errors->first('community_description') }}</div>
                        @endif
                        <div class="main-btn-box">
                            <button type="submit" id="next1">Next</button>
                        </div>
            
                    </div>
            
                    <div id="main-form2">

            
                        <h3 class="main-h3">Style Your Community</h3>
                        <p>Adding visual flair will catch new members attention and help establish your community’s culture! You can update this at any time.</p>
                        <div class="main-form2-first">
                            <span style="font-size: 14.5px; display: flex;align-items: center;">Banner</span>
                            <label class="main-form2-first-file-lable" for="main-form2-first-file">
                                <svg rpl="" fill="white" height="20" icon-name="image-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 4a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm0 4.75a1.75 1.75 0 1 1 0-3.5 1.75 1.75 0 0 1 0 3.5Z"></path><path d="M17.375 1H2.625A1.627 1.627 0 0 0 1 2.625v14.75A1.627 1.627 0 0 0 2.625 19h14.75A1.627 1.627 0 0 0 19 17.375V2.625A1.627 1.627 0 0 0 17.375 1ZM2.25 17.375v-2.683L4.9 12.04a2.332 2.332 0 0 1 3.3 0l5.71 5.71H2.625a.375.375 0 0 1-.375-.375Zm15.5 0a.375.375 0 0 1-.375.375h-1.7l-6.6-6.594a3.582 3.582 0 0 0-5.063 0L2.25 12.925v-10.3a.375.375 0 0 1 .375-.375h14.75a.375.375 0 0 1 .375.375v14.75Z"></path><!--?-->
                                </svg>
                                <span>Add</span>
                            </label>

                            <input type="file" name="community_coverpic" id="main-form2-first-file" placeholder="Last Name" required>
                        </div>
    
                        <div class="main-form2-sec">
                            <span style="font-size: 14.5px; display: flex;align-items: center;">Profile</span>
                            <label class="main-form2-sec-file-label" for="main-form2-sec-file">
                                <svg rpl="" fill="white" height="20" icon-name="image-post-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 4a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm0 4.75a1.75 1.75 0 1 1 0-3.5 1.75 1.75 0 0 1 0 3.5Z"></path><path d="M17.375 1H2.625A1.627 1.627 0 0 0 1 2.625v14.75A1.627 1.627 0 0 0 2.625 19h14.75A1.627 1.627 0 0 0 19 17.375V2.625A1.627 1.627 0 0 0 17.375 1ZM2.25 17.375v-2.683L4.9 12.04a2.332 2.332 0 0 1 3.3 0l5.71 5.71H2.625a.375.375 0 0 1-.375-.375Zm15.5 0a.375.375 0 0 1-.375.375h-1.7l-6.6-6.594a3.582 3.582 0 0 0-5.063 0L2.25 12.925v-10.3a.375.375 0 0 1 .375-.375h14.75a.375.375 0 0 1 .375.375v14.75Z"></path><!--?-->
                                </svg>
                                <span class="">Add</span>
                            </label>
                            <input type="file" for="community_pic" id="main-form2-sec-file" placeholder="Last Name" required>
                        </div>    

                        @if ($errors->has('community_pic'))
                            <div class="alert alert-danger">{{ $errors->first('community_pic') }}</div>
                        @endif
                        @if ($errors->has('community_coverpic'))
                            <div class="alert alert-danger">{{ $errors->first('community_coverpic') }}</div>
                        @endif
                        
                        <div class="main-form2-img-show">
                            <div class="main-form2-img-show-first">
                                <img src="" alt="">
                            </div>
                            <div class="main-form2-img-show-sec">
                                <img src="" alt="">
                                <span></span>
                            </div>
                            <div class="main-form2-img-show-third">
                                <span></span>
                            </div>
                        </div>
            
                        <div class="main-btn-box">
                            <button type="button" id="back1">Back</button>
                            <button type="submit" id="next2">Next</button>
            
                        </div>
    
            
                    </div>
            
                    <div id="main-form3">

            
                        <h3 class="main-h3">Select Topics</h3>
                         <div class="slide-container">
    
                            <div class="main-slidebar">
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-games" value="games">
                                <label class="identifier-button" for="main-form3-games">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-videogaming-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.929 14.17 18.277 6.6a4.631 4.631 0 0 0-4.52-3.6H5.702a4.623 4.623 0 0 0-4.58 3.908L.034 14.387a3.134 3.134 0 0 0 .735 2.5 3.227 3.227 0 0 0 5.553-1.284l.39-1.635h5.794l.39 1.635A3.2 3.2 0 0 0 16.01 18h.782a3.211 3.211 0 0 0 3.123-2.444c.109-.455.114-.929.015-1.386Zm-1.6 1.85a1.964 1.964 0 0 1-1.54.73h-.781a1.947 1.947 0 0 1-1.9-1.453l-.63-2.476H5.74L5.11 15.3a1.947 1.947 0 0 1-1.9 1.453 1.974 1.974 0 0 1-1.5-.678 1.862 1.862 0 0 1-.443-1.506l1.09-7.481A3.366 3.366 0 0 1 5.7 4.25h8.062a3.373 3.373 0 0 1 3.3 2.614l1.65 7.573a1.877 1.877 0 0 1-.383 1.583h-.001Z"></path><path d="M6.256 6.212h-1.25v1.776h-1.73v1.25h1.73v1.622h1.25V9.238h1.73v-1.25h-1.73V6.212Z"></path><path d="M11.82 8.81a1 1 0 1 0 1.71.71 1.001 1.001 0 0 0-.3-.71 1.034 1.034 0 0 0-1.41 0Z"></path><path d="M15.23 6.85a.875.875 0 0 0-.32-.22c-.246-.1-.522-.1-.77 0a.875.875 0 0 0-.32.22.975.975 0 0 0 0 1.41 1 1 0 0 0 1.41 0 1.03 1.03 0 0 0 .22-1.09.877.877 0 0 0-.22-.32Z"></path>
                                    </svg>
                                    <span>Games</span>
    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-technologies" value="technologies">
                                <label class="identifier-button" for="main-form3-technologies">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-technology-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.875 7h-3.75A1.127 1.127 0 0 0 7 8.125v3.75A1.127 1.127 0 0 0 8.125 13h3.75A1.127 1.127 0 0 0 13 11.875v-3.75A1.127 1.127 0 0 0 11.875 7Zm-.125 4.75h-3.5v-3.5h3.5v3.5Z"></path><path d="M19 7.625v-1.25h-2v-1.75A1.627 1.627 0 0 0 15.375 3h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75A1.627 1.627 0 0 0 3 4.625v1.75H1v1.25h2v1.75H1v1.25h2v1.75H1v1.25h2v1.75A1.627 1.627 0 0 0 4.625 17h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75A1.627 1.627 0 0 0 17 15.375v-1.75h2v-1.25h-2v-1.75h2v-1.25h-2v-1.75h2Zm-3.25 7.75a.375.375 0 0 1-.375.375H4.625a.375.375 0 0 1-.375-.375V4.625a.375.375 0 0 1 .375-.375h10.75a.375.375 0 0 1 .375.375v10.75Z"></path>
                                    </svg>
                                    <span>Technologies</span>                                
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-movies" value="movies">
                                <label class="identifier-button" for="main-form3-movies">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-movies-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.375 8H6.45L17.3 5.093a.625.625 0 0 0 .44-.765L16.709.464a.62.62 0 0 0-.522-.459.616.616 0 0 0-.244.017L.488 4.162a.624.624 0 0 0-.441.766l.969 3.618A.527.527 0 0 0 1 8.625v8.75A2.629 2.629 0 0 0 3.625 20h12.75A2.628 2.628 0 0 0 19 17.375v-8.75A.625.625 0 0 0 18.375 8ZM8.06 6.275l-2.75.737v-2.7a.61.61 0 0 0-.028-.135l2.778-.744v2.842Zm1.25-3.182 2.75-.737V5.2l-2.75.737V3.093Zm7.063.954-3.063.82V2.022l2.35-.63.713 2.656ZM4.06 4.5v2.807c0 .013.006.025.007.038l-1.94.52-.712-2.657L4.06 4.5ZM17.75 17.375a1.377 1.377 0 0 1-1.375 1.375H3.625a1.377 1.377 0 0 1-1.375-1.375V9.25h15.5v8.125Z"></path>
                                    </svg>
                                    <span>Movies</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-travel" value="travel">
                                <label class="identifier-button" for="main-form3-travel">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-travel-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m6.447 8.472-.309.372-.479.575L1.75 5.548a.626.626 0 0 1-.015-.87A3.268 3.268 0 0 1 5.16 3.9l3.867 1.59c-.292.323-.57.657-.857.984L4.711 5.068a1.976 1.976 0 0 0-1.565.106l3.301 3.298Zm.344 10.833a1.123 1.123 0 0 0 .815-.722 4.965 4.965 0 0 0-.129-3.446l2.123-1.75 5.328 5.323.442-.442a3.265 3.265 0 0 0 .747-3.425l-2.126-5.221a122.4 122.4 0 0 0 2.568-2.443 12.172 12.172 0 0 0 2.623-3.9A1.875 1.875 0 0 0 16.7.828l-.055.024a12.167 12.167 0 0 0-3.74 2.553l-.172.17c-1.7 1.7-3.339 3.5-4.873 5.343l-3 3.607a4.959 4.959 0 0 0-3.448-.13A1.128 1.128 0 0 0 1 14.255L5.746 19a1.122 1.122 0 0 0 1.045.305Zm-2.42-5.63a1.11 1.11 0 0 0 1.387-.27l3.067-3.688a76.94 76.94 0 0 1 4.8-5.257l.172-.17A10.9 10.9 0 0 1 17.148 2l.057-.024a.606.606 0 0 1 .686.127.614.614 0 0 1 .138.69 10.909 10.909 0 0 1-2.354 3.5c-.722.723-2.06 1.97-2.6 2.473a1.111 1.111 0 0 0-.274 1.245l2.15 5.279a2 2 0 0 1-.095 1.579L10.4 12.422a1.123 1.123 0 0 0-1.51-.072L6.6 14.24a1.113 1.113 0 0 0-.272 1.392c.31.742.366 1.566.161 2.344l-4.464-4.463a3.655 3.655 0 0 1 2.345.163Z"></path>
                                    </svg>
                                    <span>Travel</span>
                                    
                                </label>
    
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-music" value="music">
                                <label class="identifier-button" for="main-form3-music">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-music-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.741 10.094h-.124A1.587 1.587 0 0 0 3 11.645v4.708a1.582 1.582 0 0 0 1.617 1.541h.124a2.543 2.543 0 0 0 2.609-2.467v-2.866a2.544 2.544 0 0 0-2.609-2.467ZM6.1 15.427a1.3 1.3 0 0 1-1.359 1.217h-.124a.336.336 0 0 1-.367-.291v-4.708a.344.344 0 0 1 .367-.3h.124A1.3 1.3 0 0 1 6.1 12.561v2.866ZM0 10.941h1.25v5.874H0v-5.874Zm17.75-.841v-.623A7.51 7.51 0 0 0 10 2.25a7.511 7.511 0 0 0-7.75 7.227v.623H1v-.623A8.76 8.76 0 0 1 10 1a8.76 8.76 0 0 1 9 8.477v.623h-1.25Zm-2.367-.008h-.124a2.544 2.544 0 0 0-2.609 2.467v2.866a2.543 2.543 0 0 0 2.609 2.467h.124A1.582 1.582 0 0 0 17 16.353v-4.708a1.587 1.587 0 0 0-1.617-1.551v-.002Zm.367 6.259a.336.336 0 0 1-.367.291h-.124a1.3 1.3 0 0 1-1.359-1.215v-2.866a1.3 1.3 0 0 1 1.359-1.217h.124a.344.344 0 0 1 .367.3v4.707Zm4.25-5.41v5.874h-1.25v-5.874H20Z"></path>
                                    </svg>
                                    <span>Music</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-education" value="education">
                                <label class="identifier-button" for="main-form3-education">
     
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-reading-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.375 2h-7.292A2.688 2.688 0 0 0 10 3a2.688 2.688 0 0 0-2.083-1H.625A.625.625 0 0 0 0 2.625v14.75A.625.625 0 0 0 .625 18h7.917v-1.25H1.25V3.25h6.667a1.465 1.465 0 0 1 1.458 1.469v11.093h1.25V4.719a1.465 1.465 0 0 1 1.458-1.469h6.667v13.5h-6.667a2.64 2.64 0 0 0-2.708 2.625V20h1.25v-.625A1.388 1.388 0 0 1 12.083 18h7.292a.624.624 0 0 0 .625-.625V2.625A.625.625 0 0 0 19.375 2Z"></path>
                                    </svg>
                                    <span>Education</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-sport" value="sport">
                                <label class="identifier-button" for="main-form3-sport">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-sports-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0ZM4.124 16.465l1.259-3.007a9.906 9.906 0 0 0 .261-6.964l-1.186.4a8.656 8.656 0 0 1-.228 6.087l-1.046 2.5a8.75 8.75 0 1 1 13.632 0l-1.046-2.5a8.653 8.653 0 0 1-.228-6.086l-1.186-.4a9.906 9.906 0 0 0 .261 6.964l1.259 3.007a8.7 8.7 0 0 1-11.752-.001Z"></path>
                                    </svg>
                                    <span>Sport</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-news" value="news_politics">
                                <label class="identifier-button" for="main-form3-news">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-news-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.875 2H3.1v13.87a.9.9 0 0 1-.925.88.9.9 0 0 1-.925-.88V3H0v12.87a2.149 2.149 0 0 0 2.081 2.121V18h16.794A1.126 1.126 0 0 0 20 16.874V3.126A1.126 1.126 0 0 0 18.875 2Zm-.125 14.75H4.15c.13-.275.199-.576.2-.88V3.25h14.4v13.5ZM13.029 9h3.849v1.25h-3.849V9Zm-6.911 4.25V12H10v1.25H6.118ZM13.029 12h3.849v1.25h-3.849V12Zm3.847-4.75H6.118V6h10.758v1.25Zm-6.876 3H6.118V9H10v1.25Z"></path>
                                    </svg>
                                    <span>News & Politics</span>
                                    
                                </label>
    
                                <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-business" value="business_finance">
                                <label class="identifier-button" for="main-form3-business">
    
                                    <svg rpl="" fill="currentColor" height="16" icon-name="topic-business-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.25 19H1v-4.5h1.25V19Zm4-7H5v7h1.25v-7Zm8 0H13v7h1.25v-7Zm4-5H17v12h1.25V7ZM6 7.557l3.206 3.2a1.126 1.126 0 0 0 1.59 0l8.647-8.646-.884-.884L10 9.79l-3.2-3.2a1.153 1.153 0 0 0-1.59 0L.559 11.231l.884.884L6 7.557Zm4.25 6.943H9V19h1.25v-4.5Z"></path>
                                    </svg>
                                    <span>Business & Finance</span>
                                    
                                </label>
    
                            </div>  
                                
                        </div>
            
                        <div class="main-btn-box">
                            <button type="button" id="back2">Back</button>
                            <button type="submit" value="submit">Submit</button>
            
                        </div>
            
                    </div>
                </form> --}}



        
        
                {{-- <div class="main-step-row">
                    <div id="main-progress" style="width: 200px;"></div>
                    <div class="main-step-col"><small class="main-small">Step 1</small></div>
                    <div class="main-step-col"><small class="main-small">Step 2</small></div>
                    <div class="main-step-col"><small class="main-small">Step 3</small></div>
        
                </div> --}}
        
            {{-- </div> --}}


            <div class="form-main">

                @if(isset($community))
                    <form id="delete-community-form" action="{{ route('community.delete', ['community_name' => $community->community_name]) }}" method="POST" onsubmit="return confirmDeleteCommunity();">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button" style="position: absolute">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 69 14"
                            class="svgIcon bin-top"
                            >
                            <g clip-path="url(#clip0_35_24)">
                                <path
                                fill="black"
                                d="M20.8232 2.62734L19.9948 4.21304C19.8224 4.54309 19.4808 4.75 19.1085 4.75H4.92857C2.20246 4.75 0 6.87266 0 9.5C0 12.1273 2.20246 14.25 4.92857 14.25H64.0714C66.7975 14.25 69 12.1273 69 9.5C69 6.87266 66.7975 4.75 64.0714 4.75H49.8915C49.5192 4.75 49.1776 4.54309 49.0052 4.21305L48.1768 2.62734C47.3451 1.00938 45.6355 0 43.7719 0H25.2281C23.3645 0 21.6549 1.00938 20.8232 2.62734ZM64.0023 20.0648C64.0397 19.4882 63.5822 19 63.0044 19H5.99556C5.4178 19 4.96025 19.4882 4.99766 20.0648L8.19375 69.3203C8.44018 73.0758 11.6746 76 15.5712 76H53.4288C57.3254 76 60.5598 73.0758 60.8062 69.3203L64.0023 20.0648Z"
                                ></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_35_24">
                                <rect fill="white" height="14" width="69"></rect>
                                </clipPath>
                            </defs>
                            </svg>
                        
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 69 57"
                            class="svgIcon bin-bottom"
                            >
                            <g clip-path="url(#clip0_35_22)">
                                <path
                                fill="black"
                                d="M20.8232 -16.3727L19.9948 -14.787C19.8224 -14.4569 19.4808 -14.25 19.1085 -14.25H4.92857C2.20246 -14.25 0 -12.1273 0 -9.5C0 -6.8727 2.20246 -4.75 4.92857 -4.75H64.0714C66.7975 -4.75 69 -6.8727 69 -9.5C69 -12.1273 66.7975 -14.25 64.0714 -14.25H49.8915C49.5192 -14.25 49.1776 -14.4569 49.0052 -14.787L48.1768 -16.3727C47.3451 -17.9906 45.6355 -19 43.7719 -19H25.2281C23.3645 -19 21.6549 -17.9906 20.8232 -16.3727ZM64.0023 1.0648C64.0397 0.4882 63.5822 0 63.0044 0H5.99556C5.4178 0 4.96025 0.4882 4.99766 1.0648L8.19375 50.3203C8.44018 54.0758 11.6746 57 15.5712 57H53.4288C57.3254 57 60.5598 54.0758 60.8062 50.3203L64.0023 1.0648Z"
                                ></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_35_22">
                                <rect fill="white" height="57" width="69"></rect>
                                </clipPath>
                            </defs>
                            </svg>
                        </button>
                    </form>
                @endif

                {{-- <form class="main-form-comm" action="{{ isset($community) ? route('update.community', ['community_name' => $community->community_name]) : route('store.community') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                
                    <div>
                        <h3 class="main-h3">
                            Tell us about your community
                        </h3>    
                        <p class="main-p">A name and description help people understand what your community is all about.</p>
                    </div>
                
                    <div>
                        <input type="text" name="community_name" id="main-h3-input-first" placeholder="Community Name" maxlength="17" required value="{{ old('community_name', $community->community_name ?? '') }}">
                    </div>
                
                    <div>
                        <textarea name="community_description" class="main-form1-text" id="main-form1-text" placeholder="Description" maxlength="50" required>{{ old('community_description', $community->community_description ?? '') }}</textarea>
                    </div>
                
                    <div class="com-pic com-pic-first">
                        <label class="com-cover-pic-label" for="com-cover-pic">Cover Picture</label>
                        <input type="file" name="community_coverpic" id="com-cover-pic" class="com-cover-pic">
                    </div>
                
                    <div class="com-pic com-pic-first">
                        <label class="com-profile-pic-label" for="com-profile-pic">Profile Picture</label>
                        <input type="file" name="community_pic" id="com-profile-pic" class="com-profile-pic">
                    </div>
                
                    <div class="main-slidebar">

                        <input type="radio" class="main-form3-input " name="main-form3-name" id="main-form3-games" value="games"  {{ (isset($community) && $community->category == 'games') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-games">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-videogaming-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.929 14.17 18.277 6.6a4.631 4.631 0 0 0-4.52-3.6H5.702a4.623 4.623 0 0 0-4.58 3.908L.034 14.387a3.134 3.134 0 0 0 .735 2.5 3.227 3.227 0 0 0 5.553-1.284l.39-1.635h5.794l.39 1.635A3.2 3.2 0 0 0 16.01 18h.782a3.211 3.211 0 0 0 3.123-2.444c.109-.455.114-.929.015-1.386Zm-1.6 1.85a1.964 1.964 0 0 1-1.54.73h-.781a1.947 1.947 0 0 1-1.9-1.453l-.63-2.476H5.74L5.11 15.3a1.947 1.947 0 0 1-1.9 1.453 1.974 1.974 0 0 1-1.5-.678 1.862 1.862 0 0 1-.443-1.506l1.09-7.481A3.366 3.366 0 0 1 5.7 4.25h8.062a3.373 3.373 0 0 1 3.3 2.614l1.65 7.573a1.877 1.877 0 0 1-.383 1.583h-.001Z"></path><path d="M6.256 6.212h-1.25v1.776h-1.73v1.25h1.73v1.622h1.25V9.238h1.73v-1.25h-1.73V6.212Z"></path><path d="M11.82 8.81a1 1 0 1 0 1.71.71 1.001 1.001 0 0 0-.3-.71 1.034 1.034 0 0 0-1.41 0Z"></path><path d="M15.23 6.85a.875.875 0 0 0-.32-.22c-.246-.1-.522-.1-.77 0a.875.875 0 0 0-.32.22.975.975 0 0 0 0 1.41 1 1 0 0 0 1.41 0 1.03 1.03 0 0 0 .22-1.09.877.877 0 0 0-.22-.32Z"></path>
                            </svg>
                            <span>Games</span>

                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-technologies" value="technologies"  {{ (isset($community) && $community->category == 'technologies') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-technologies">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-technology-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.875 7h-3.75A1.127 1.127 0 0 0 7 8.125v3.75A1.127 1.127 0 0 0 8.125 13h3.75A1.127 1.127 0 0 0 13 11.875v-3.75A1.127 1.127 0 0 0 11.875 7Zm-.125 4.75h-3.5v-3.5h3.5v3.5Z"></path><path d="M19 7.625v-1.25h-2v-1.75A1.627 1.627 0 0 0 15.375 3h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75A1.627 1.627 0 0 0 3 4.625v1.75H1v1.25h2v1.75H1v1.25h2v1.75H1v1.25h2v1.75A1.627 1.627 0 0 0 4.625 17h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75A1.627 1.627 0 0 0 17 15.375v-1.75h2v-1.25h-2v-1.75h2v-1.25h-2v-1.75h2Zm-3.25 7.75a.375.375 0 0 1-.375.375H4.625a.375.375 0 0 1-.375-.375V4.625a.375.375 0 0 1 .375-.375h10.75a.375.375 0 0 1 .375.375v10.75Z"></path>
                            </svg>
                            <span>Technologies</span>                                
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-movies" value="movies"  {{ (isset($community) && $community->category == 'movies') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-movies">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-movies-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.375 8H6.45L17.3 5.093a.625.625 0 0 0 .44-.765L16.709.464a.62.62 0 0 0-.522-.459.616.616 0 0 0-.244.017L.488 4.162a.624.624 0 0 0-.441.766l.969 3.618A.527.527 0 0 0 1 8.625v8.75A2.629 2.629 0 0 0 3.625 20h12.75A2.628 2.628 0 0 0 19 17.375v-8.75A.625.625 0 0 0 18.375 8ZM8.06 6.275l-2.75.737v-2.7a.61.61 0 0 0-.028-.135l2.778-.744v2.842Zm1.25-3.182 2.75-.737V5.2l-2.75.737V3.093Zm7.063.954-3.063.82V2.022l2.35-.63.713 2.656ZM4.06 4.5v2.807c0 .013.006.025.007.038l-1.94.52-.712-2.657L4.06 4.5ZM17.75 17.375a1.377 1.377 0 0 1-1.375 1.375H3.625a1.377 1.377 0 0 1-1.375-1.375V9.25h15.5v8.125Z"></path>
                            </svg>
                            <span>Movies</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-travel" value="travel"  {{ (isset($community) && $community->category == 'travel') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-travel">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-travel-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="m6.447 8.472-.309.372-.479.575L1.75 5.548a.626.626 0 0 1-.015-.87A3.268 3.268 0 0 1 5.16 3.9l3.867 1.59c-.292.323-.57.657-.857.984L4.711 5.068a1.976 1.976 0 0 0-1.565.106l3.301 3.298Zm.344 10.833a1.123 1.123 0 0 0 .815-.722 4.965 4.965 0 0 0-.129-3.446l2.123-1.75 5.328 5.323.442-.442a3.265 3.265 0 0 0 .747-3.425l-2.126-5.221a122.4 122.4 0 0 0 2.568-2.443 12.172 12.172 0 0 0 2.623-3.9A1.875 1.875 0 0 0 16.7.828l-.055.024a12.167 12.167 0 0 0-3.74 2.553l-.172.17c-1.7 1.7-3.339 3.5-4.873 5.343l-3 3.607a4.959 4.959 0 0 0-3.448-.13A1.128 1.128 0 0 0 1 14.255L5.746 19a1.122 1.122 0 0 0 1.045.305Zm-2.42-5.63a1.11 1.11 0 0 0 1.387-.27l3.067-3.688a76.94 76.94 0 0 1 4.8-5.257l.172-.17A10.9 10.9 0 0 1 17.148 2l.057-.024a.606.606 0 0 1 .686.127.614.614 0 0 1 .138.69 10.909 10.909 0 0 1-2.354 3.5c-.722.723-2.06 1.97-2.6 2.473a1.111 1.111 0 0 0-.274 1.245l2.15 5.279a2 2 0 0 1-.095 1.579L10.4 12.422a1.123 1.123 0 0 0-1.51-.072L6.6 14.24a1.113 1.113 0 0 0-.272 1.392c.31.742.366 1.566.161 2.344l-4.464-4.463a3.655 3.655 0 0 1 2.345.163Z"></path>
                            </svg>
                            <span>Travel</span>
                            
                        </label>


                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-music" value="music"  {{ (isset($community) && $community->category == 'music') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-music">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-music-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.741 10.094h-.124A1.587 1.587 0 0 0 3 11.645v4.708a1.582 1.582 0 0 0 1.617 1.541h.124a2.543 2.543 0 0 0 2.609-2.467v-2.866a2.544 2.544 0 0 0-2.609-2.467ZM6.1 15.427a1.3 1.3 0 0 1-1.359 1.217h-.124a.336.336 0 0 1-.367-.291v-4.708a.344.344 0 0 1 .367-.3h.124A1.3 1.3 0 0 1 6.1 12.561v2.866ZM0 10.941h1.25v5.874H0v-5.874Zm17.75-.841v-.623A7.51 7.51 0 0 0 10 2.25a7.511 7.511 0 0 0-7.75 7.227v.623H1v-.623A8.76 8.76 0 0 1 10 1a8.76 8.76 0 0 1 9 8.477v.623h-1.25Zm-2.367-.008h-.124a2.544 2.544 0 0 0-2.609 2.467v2.866a2.543 2.543 0 0 0 2.609 2.467h.124A1.582 1.582 0 0 0 17 16.353v-4.708a1.587 1.587 0 0 0-1.617-1.551v-.002Zm.367 6.259a.336.336 0 0 1-.367.291h-.124a1.3 1.3 0 0 1-1.359-1.215v-2.866a1.3 1.3 0 0 1 1.359-1.217h.124a.344.344 0 0 1 .367.3v4.707Zm4.25-5.41v5.874h-1.25v-5.874H20Z"></path>
                            </svg>
                            <span>Music</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-education" value="education"  {{ (isset($community) && $community->category == 'education') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-education">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-reading-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.375 2h-7.292A2.688 2.688 0 0 0 10 3a2.688 2.688 0 0 0-2.083-1H.625A.625.625 0 0 0 0 2.625v14.75A.625.625 0 0 0 .625 18h7.917v-1.25H1.25V3.25h6.667a1.465 1.465 0 0 1 1.458 1.469v11.093h1.25V4.719a1.465 1.465 0 0 1 1.458-1.469h6.667v13.5h-6.667a2.64 2.64 0 0 0-2.708 2.625V20h1.25v-.625A1.388 1.388 0 0 1 12.083 18h7.292a.624.624 0 0 0 .625-.625V2.625A.625.625 0 0 0 19.375 2Z"></path>
                            </svg>
                            <span>Education</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-sport" value="sport"  {{ (isset($community) && $community->category == 'sport') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-sport">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-sports-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0ZM4.124 16.465l1.259-3.007a9.906 9.906 0 0 0 .261-6.964l-1.186.4a8.656 8.656 0 0 1-.228 6.087l-1.046 2.5a8.75 8.75 0 1 1 13.632 0l-1.046-2.5a8.653 8.653 0 0 1-.228-6.086l-1.186-.4a9.906 9.906 0 0 0 .261 6.964l1.259 3.007a8.7 8.7 0 0 1-11.752-.001Z"></path>
                            </svg>
                            <span>Sport</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-news" value="news_politics"  {{ (isset($community) && $community->category == 'news_politics') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-news">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-news-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.875 2H3.1v13.87a.9.9 0 0 1-.925.88.9.9 0 0 1-.925-.88V3H0v12.87a2.149 2.149 0 0 0 2.081 2.121V18h16.794A1.126 1.126 0 0 0 20 16.874V3.126A1.126 1.126 0 0 0 18.875 2Zm-.125 14.75H4.15c.13-.275.199-.576.2-.88V3.25h14.4v13.5ZM13.029 9h3.849v1.25h-3.849V9Zm-6.911 4.25V12H10v1.25H6.118ZM13.029 12h3.849v1.25h-3.849V12Zm3.847-4.75H6.118V6h10.758v1.25Zm-6.876 3H6.118V9H10v1.25Z"></path>
                            </svg>
                            <span>News & Politics</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-business" value="business_finance" {{ (isset($community) && $community->category == 'business_finance') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-business">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-business-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 19H1v-4.5h1.25V19Zm4-7H5v7h1.25v-7Zm8 0H13v7h1.25v-7Zm4-5H17v12h1.25V7ZM6 7.557l3.206 3.2a1.126 1.126 0 0 0 1.59 0l8.647-8.646-.884-.884L10 9.79l-3.2-3.2a1.153 1.153 0 0 0-1.59 0L.559 11.231l.884.884L6 7.557Zm4.25 6.943H9V19h1.25v-4.5Z"></path>
                            </svg>
                            <span>Business & Finance</span>
                            
                        </label>

                    </div> 
                
                    <div>
                        <button type="submit" class="form-submit">{{ isset($community) ? 'Update' : 'Submit' }}</button>
                    </div>
                </form>  --}}

                <form class="main-form-comm" action="{{ isset($community) ? route('update.community', ['community_name' => $community->community_name]) : route('store.community') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    {{-- @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach --}}

                    @if($errors->any() || session('success'))
                        <div style="position: fixed; top: 1rem; left: 50%; transform: translateX(-50%); z-index: 9999;">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    @php
                                        // Custom message for the specific field
                                        if (str_contains($error, 'main-form3-name')) {
                                            $error = 'The category field is required.';
                                        }
                                    @endphp
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
                
                    <div>
                        <h3 class="main-h3">
                            Tell us about your community
                        </h3>    
                        <p class="main-p">A name and description help people understand what your community is all about.</p>
                    </div>
                
                    <div>
                        <input type="text" name="community_name" id="main-h3-input-first" placeholder="Community Name" maxlength="17" required value="{{ old('community_name', $community->community_name ?? '') }}">
                    </div>
                
                    <div>
                        <textarea name="community_description" class="main-form1-text" id="main-form1-text" placeholder="Description" maxlength="50" required>{{ old('community_description', $community->community_description ?? '') }}</textarea>
                    </div>
                
                    <div class="com-pic com-pic-first">
                        <label class="com-cover-pic-label" for="com-cover-pic">Cover Picture</label>
                        <input type="file" name="community_coverpic" id="com-cover-pic" class="com-cover-pic">
                    </div>
                
                    <div class="com-pic com-pic-first">
                        <label class="com-profile-pic-label" for="com-profile-pic">Profile Picture</label>
                        <input type="file" name="community_pic" id="com-profile-pic" class="com-profile-pic">
                    </div>
                
                    <div class="main-slidebar">

                        <input type="radio" class="main-form3-input " name="main-form3-name" id="main-form3-games" value="games"  {{ (isset($community) && $community->category == 'games') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-games">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-videogaming-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.929 14.17 18.277 6.6a4.631 4.631 0 0 0-4.52-3.6H5.702a4.623 4.623 0 0 0-4.58 3.908L.034 14.387a3.134 3.134 0 0 0 .735 2.5 3.227 3.227 0 0 0 5.553-1.284l.39-1.635h5.794l.39 1.635A3.2 3.2 0 0 0 16.01 18h.782a3.211 3.211 0 0 0 3.123-2.444c.109-.455.114-.929.015-1.386Zm-1.6 1.85a1.964 1.964 0 0 1-1.54.73h-.781a1.947 1.947 0 0 1-1.9-1.453l-.63-2.476H5.74L5.11 15.3a1.947 1.947 0 0 1-1.9 1.453 1.974 1.974 0 0 1-1.5-.678 1.862 1.862 0 0 1-.443-1.506l1.09-7.481A3.366 3.366 0 0 1 5.7 4.25h8.062a3.373 3.373 0 0 1 3.3 2.614l1.65 7.573a1.877 1.877 0 0 1-.383 1.583h-.001Z"></path><path d="M6.256 6.212h-1.25v1.776h-1.73v1.25h1.73v1.622h1.25V9.238h1.73v-1.25h-1.73V6.212Z"></path><path d="M11.82 8.81a1 1 0 1 0 1.71.71 1.001 1.001 0 0 0-.3-.71 1.034 1.034 0 0 0-1.41 0Z"></path><path d="M15.23 6.85a.875.875 0 0 0-.32-.22c-.246-.1-.522-.1-.77 0a.875.875 0 0 0-.32.22.975.975 0 0 0 0 1.41 1 1 0 0 0 1.41 0 1.03 1.03 0 0 0 .22-1.09.877.877 0 0 0-.22-.32Z"></path>
                            </svg>
                            <span>Games</span>

                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-technologies" value="technologies"  {{ (isset($community) && $community->category == 'technologies') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-technologies">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-technology-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.875 7h-3.75A1.127 1.127 0 0 0 7 8.125v3.75A1.127 1.127 0 0 0 8.125 13h3.75A1.127 1.127 0 0 0 13 11.875v-3.75A1.127 1.127 0 0 0 11.875 7Zm-.125 4.75h-3.5v-3.5h3.5v3.5Z"></path><path d="M19 7.625v-1.25h-2v-1.75A1.627 1.627 0 0 0 15.375 3h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75V1h-1.25v2h-1.75A1.627 1.627 0 0 0 3 4.625v1.75H1v1.25h2v1.75H1v1.25h2v1.75H1v1.25h2v1.75A1.627 1.627 0 0 0 4.625 17h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75v2h1.25v-2h1.75A1.627 1.627 0 0 0 17 15.375v-1.75h2v-1.25h-2v-1.75h2v-1.25h-2v-1.75h2Zm-3.25 7.75a.375.375 0 0 1-.375.375H4.625a.375.375 0 0 1-.375-.375V4.625a.375.375 0 0 1 .375-.375h10.75a.375.375 0 0 1 .375.375v10.75Z"></path>
                            </svg>
                            <span>Technologies</span>                                
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-movies" value="movies"  {{ (isset($community) && $community->category == 'movies') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-movies">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-movies-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.375 8H6.45L17.3 5.093a.625.625 0 0 0 .44-.765L16.709.464a.62.62 0 0 0-.522-.459.616.616 0 0 0-.244.017L.488 4.162a.624.624 0 0 0-.441.766l.969 3.618A.527.527 0 0 0 1 8.625v8.75A2.629 2.629 0 0 0 3.625 20h12.75A2.628 2.628 0 0 0 19 17.375v-8.75A.625.625 0 0 0 18.375 8ZM8.06 6.275l-2.75.737v-2.7a.61.61 0 0 0-.028-.135l2.778-.744v2.842Zm1.25-3.182 2.75-.737V5.2l-2.75.737V3.093Zm7.063.954-3.063.82V2.022l2.35-.63.713 2.656ZM4.06 4.5v2.807c0 .013.006.025.007.038l-1.94.52-.712-2.657L4.06 4.5ZM17.75 17.375a1.377 1.377 0 0 1-1.375 1.375H3.625a1.377 1.377 0 0 1-1.375-1.375V9.25h15.5v8.125Z"></path>
                            </svg>
                            <span>Movies</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-travel" value="travel"  {{ (isset($community) && $community->category == 'travel') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-travel">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-travel-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="m6.447 8.472-.309.372-.479.575L1.75 5.548a.626.626 0 0 1-.015-.87A3.268 3.268 0 0 1 5.16 3.9l3.867 1.59c-.292.323-.57.657-.857.984L4.711 5.068a1.976 1.976 0 0 0-1.565.106l3.301 3.298Zm.344 10.833a1.123 1.123 0 0 0 .815-.722 4.965 4.965 0 0 0-.129-3.446l2.123-1.75 5.328 5.323.442-.442a3.265 3.265 0 0 0 .747-3.425l-2.126-5.221a122.4 122.4 0 0 0 2.568-2.443 12.172 12.172 0 0 0 2.623-3.9A1.875 1.875 0 0 0 16.7.828l-.055.024a12.167 12.167 0 0 0-3.74 2.553l-.172.17c-1.7 1.7-3.339 3.5-4.873 5.343l-3 3.607a4.959 4.959 0 0 0-3.448-.13A1.128 1.128 0 0 0 1 14.255L5.746 19a1.122 1.122 0 0 0 1.045.305Zm-2.42-5.63a1.11 1.11 0 0 0 1.387-.27l3.067-3.688a76.94 76.94 0 0 1 4.8-5.257l.172-.17A10.9 10.9 0 0 1 17.148 2l.057-.024a.606.606 0 0 1 .686.127.614.614 0 0 1 .138.69 10.909 10.909 0 0 1-2.354 3.5c-.722.723-2.06 1.97-2.6 2.473a1.111 1.111 0 0 0-.274 1.245l2.15 5.279a2 2 0 0 1-.095 1.579L10.4 12.422a1.123 1.123 0 0 0-1.51-.072L6.6 14.24a1.113 1.113 0 0 0-.272 1.392c.31.742.366 1.566.161 2.344l-4.464-4.463a3.655 3.655 0 0 1 2.345.163Z"></path>
                            </svg>
                            <span>Travel</span>
                            
                        </label>


                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-music" value="music"  {{ (isset($community) && $community->category == 'music') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-music">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-music-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.741 10.094h-.124A1.587 1.587 0 0 0 3 11.645v4.708a1.582 1.582 0 0 0 1.617 1.541h.124a2.543 2.543 0 0 0 2.609-2.467v-2.866a2.544 2.544 0 0 0-2.609-2.467ZM6.1 15.427a1.3 1.3 0 0 1-1.359 1.217h-.124a.336.336 0 0 1-.367-.291v-4.708a.344.344 0 0 1 .367-.3h.124A1.3 1.3 0 0 1 6.1 12.561v2.866ZM0 10.941h1.25v5.874H0v-5.874Zm17.75-.841v-.623A7.51 7.51 0 0 0 10 2.25a7.511 7.511 0 0 0-7.75 7.227v.623H1v-.623A8.76 8.76 0 0 1 10 1a8.76 8.76 0 0 1 9 8.477v.623h-1.25Zm-2.367-.008h-.124a2.544 2.544 0 0 0-2.609 2.467v2.866a2.543 2.543 0 0 0 2.609 2.467h.124A1.582 1.582 0 0 0 17 16.353v-4.708a1.587 1.587 0 0 0-1.617-1.551v-.002Zm.367 6.259a.336.336 0 0 1-.367.291h-.124a1.3 1.3 0 0 1-1.359-1.215v-2.866a1.3 1.3 0 0 1 1.359-1.217h.124a.344.344 0 0 1 .367.3v4.707Zm4.25-5.41v5.874h-1.25v-5.874H20Z"></path>
                            </svg>
                            <span>Music</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-education" value="education"  {{ (isset($community) && $community->category == 'education') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-education">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-reading-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.375 2h-7.292A2.688 2.688 0 0 0 10 3a2.688 2.688 0 0 0-2.083-1H.625A.625.625 0 0 0 0 2.625v14.75A.625.625 0 0 0 .625 18h7.917v-1.25H1.25V3.25h6.667a1.465 1.465 0 0 1 1.458 1.469v11.093h1.25V4.719a1.465 1.465 0 0 1 1.458-1.469h6.667v13.5h-6.667a2.64 2.64 0 0 0-2.708 2.625V20h1.25v-.625A1.388 1.388 0 0 1 12.083 18h7.292a.624.624 0 0 0 .625-.625V2.625A.625.625 0 0 0 19.375 2Z"></path>
                            </svg>
                            <span>Education</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-sport" value="sport"  {{ (isset($community) && $community->category == 'sport') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-sport">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-sports-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0ZM4.124 16.465l1.259-3.007a9.906 9.906 0 0 0 .261-6.964l-1.186.4a8.656 8.656 0 0 1-.228 6.087l-1.046 2.5a8.75 8.75 0 1 1 13.632 0l-1.046-2.5a8.653 8.653 0 0 1-.228-6.086l-1.186-.4a9.906 9.906 0 0 0 .261 6.964l1.259 3.007a8.7 8.7 0 0 1-11.752-.001Z"></path>
                            </svg>
                            <span>Sport</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-news" value="news_politics"  {{ (isset($community) && $community->category == 'news_politics') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-news">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-news-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.875 2H3.1v13.87a.9.9 0 0 1-.925.88.9.9 0 0 1-.925-.88V3H0v12.87a2.149 2.149 0 0 0 2.081 2.121V18h16.794A1.126 1.126 0 0 0 20 16.874V3.126A1.126 1.126 0 0 0 18.875 2Zm-.125 14.75H4.15c.13-.275.199-.576.2-.88V3.25h14.4v13.5ZM13.029 9h3.849v1.25h-3.849V9Zm-6.911 4.25V12H10v1.25H6.118ZM13.029 12h3.849v1.25h-3.849V12Zm3.847-4.75H6.118V6h10.758v1.25Zm-6.876 3H6.118V9H10v1.25Z"></path>
                            </svg>
                            <span>News & Politics</span>
                            
                        </label>

                        <input type="radio" class="main-form3-input" name="main-form3-name" id="main-form3-business" value="business_finance" {{ (isset($community) && $community->category == 'business_finance') ? 'checked' : '' }}>
                        <label class="identifier-button" for="main-form3-business">

                            <svg rpl="" fill="currentColor" height="16" icon-name="topic-business-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 19H1v-4.5h1.25V19Zm4-7H5v7h1.25v-7Zm8 0H13v7h1.25v-7Zm4-5H17v12h1.25V7ZM6 7.557l3.206 3.2a1.126 1.126 0 0 0 1.59 0l8.647-8.646-.884-.884L10 9.79l-3.2-3.2a1.153 1.153 0 0 0-1.59 0L.559 11.231l.884.884L6 7.557Zm4.25 6.943H9V19h1.25v-4.5Z"></path>
                            </svg>
                            <span>Business & Finance</span>
                            
                        </label>

                    </div> 
                
                    <div>
                        <button type="submit" class="form-submit">{{ isset($community) ? 'Update' : 'Submit' }}</button>
                    </div>
                </form> 


                <div class="main-form2-img-show">
                    <div class="main-form2-img-show-first">
                        <img src="{{ isset($community) && $community->community_coverpic ? asset('storage/' . $community->community_coverpic) : '' }}" 
                             onerror="this.src='https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';">
                    </div>
                    <div class="main-form2-img-show-sec">
                        <img src="{{ isset($community) && $community->community_pic ? asset('storage/' . $community->community_pic) : '' }}" 
                             onerror="this.src='https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';">
                        <div class="main-form2-img-show-sec-div">
                            <span class="main-form2-img-show-sec-first">{{ old('community_name', $community->community_name ?? '') }}</span>
                            <span class="main-form2-img-show-sec-second">{{ old('community_description', $community->community_description ?? '') }}</span>
                        </div>
                    </div>
                </div>

            </div>

        </main>

        <script src="{{asset('js/create_community.js')}}"></script>
    </body>

</html>