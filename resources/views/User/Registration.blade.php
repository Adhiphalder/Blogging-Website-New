<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration & Login</title>
    <link rel="stylesheet" href="{{asset('css/registration.css')}}">
    <link rel="stylesheet" href="{{asset('css/preloader.css')}}">
    <link rel="shortcut icon" href="{{asset('/Pictures/inkspire.png')}}" type="image/svg+xml">

</head>

<body>

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

    <video autoplay loop muted playsinline class="background-video">
        <source src="/Video/Space.mp4" type="video/mp4">
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var video = document.getElementById("background-video");
                    video.playbackRate = 1.2; 
                });
            </script>
    </video>

    <div class="main-div">
        <div class="left-div">
            <div class="left-div-img">
                <!-- Left side logo -->
                <img src="/Pictures/inkspire.png" alt="">
            </div>

            <div class="left-div-button">
                <button id="registerBtn" onclick="showDiv('register')" class="selection-button">Register</button>
                <button id="loginBtn" onclick="showDiv('login')" class="selection-button">Login</button>
            </div>
            
            <div class="left-main-work">
                <!-- Registration Part -->
                <div id="register" class="register visible">

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

                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf 
                        <div class="register-ele">

                            <input type="text" name="name" placeholder="Name" value="{{old("name")}}">
                        </div>
                        <div class="register-ele">
                            <input type="email" name="email" placeholder="Email" value="{{old("email")}}" >
                        </div>
                        <div class="register-ele">

                            <input type="password" name="password" placeholder="Password" >
                        </div>
                        <button type="submit" class="submit-button register-button">Join for free</button>
                    </form>
                </div>

                <!-- Login Part -->
                <div id="login" class="login">
                    {{-- @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif --}}

                    {{-- @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

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


                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                        <div class="login-ele">
                            <input type="email" name="email" placeholder="Email" required value="{{old("email")}}">
                        </div>
                        <div class="login-ele">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="login-ele" style="text-align: left;">
                            <a href="/forgot"><button class="forget-pass" type="button" >Forget Password?</button></a>
                        </div>
                        <button type="submit" class="submit-button login-button">Login</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="right-div">
            <img src="/Pictures/image copy.png" alt="">
        </div>
    </div>

    <script src="{{asset('js/registration.js')}}"></script>
</body>

</html>