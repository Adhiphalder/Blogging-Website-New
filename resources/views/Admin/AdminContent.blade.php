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
                        <div class="profile-img2"></div>
                        <span class="username-hover">adhiphalder</span>
                        <p> • 22 hr. ago</p>
    
                    </div>
                    
                    <h3>Who are you? Without reference to your name, job, culture, hobbies, family and relationships?   </h3>
                    <p class="post-para">Ok so I am 30 years old. Turned 30 back in March and I bought myself a PS5 after my 4 shit out finally after 12 years.
    
                        I was excited about all the big games but was pleasantly entertained with Astro Bot. So clever! My kids would watch me play before bed and they just loved it.
                        
                        Never thought a sequel would come out. Finally got to try the new one and I am BLOWN AWAY at how absolutely creative and visually appealing this game is. I felt like I was a kid playing an all time classic for the first time. It’s bringing me so much joy!
                        
                        Don't have many gamers in my life. So I figured I would write this just to share how great I thought it is. Anyone else feel the same?
                    </p>
    
                    <div class="post-img">
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
                    </div>
    
                </div> 



                {{-- COMMENTS --}}


                <div class="main-user-comments">
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
                </div>


                <div class="main-user-comments">
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
                </div>


                <div class="main-user-comments">
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
                </div>


                <div class="main-user-comments">
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
                </div>

                




                {{-- <div class="post-wall2">
                    <div class="username">
                        <div class="profile-img2"></div>
                        <span class="username-hover">adhiphalder</span>
                        <p> • 22 hr. ago</p>
                    
                    </div>
                    <h3>Hey everyone! I'm a 19-year-old college student. Recently, I'm down by 3,000 INR in trading (I know that might not seem like a lot to some, but for me, it is). I've earned this money by writing assignments for friends, selling my programs and assignment sheets, and doing odd jobs for people around me. So, this is truly my hard-earned money, but due to my urge to learn everything, I've ended up with this loss.   </h3>
    
                </div> 

                <div class="post-wall2">
                    <div class="username">
                        <div class="profile-img2"></div>
                        <span class="username-hover">adhiphalder</span>
                        <p> • 22 hr. ago</p>
                    
                    
                    </div>
                    
                    <h3>Who are you? Without reference to your name, job, culture, hobbies, family and relationships? dhfvshfvshvfskfshfshf   </h3>
                    <p class="post-para">Ok so I am 30 years old. Turned 30 back in March and I bought myself a PS5 after my 4 shit out finally after 12 years.
    
                        I was excited about all the big games but was pleasantly entertained with Astro Bot. So clever! My kids would watch me play before bed and they just loved it.
                        
                        Never thought a sequel would come out. Finally got to try the new one and I am BLOWN AWAY at how absolutely creative and visually appealing this game is. I felt like I was a kid playing an all time classic for the first time. It’s bringing me so much joy!
                        
                        Don’t have many gamers in my life. So I figured I would write this just to share how great I thought it is. Anyone else feel the same?</p>
    
    
                </div> --}}


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