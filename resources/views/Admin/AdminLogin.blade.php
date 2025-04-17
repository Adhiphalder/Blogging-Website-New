<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{asset('css/adminlogin.css')}}"> 

</head>

<body>

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
            <div id="login" class="login">

                <h3 class="login-heading">Admin Login</h3>

                {{-- <form action="" method="get">

                    <div class="login-ele">
                        <input type="email" name="" id="" placeholder="Admin ID" required>
                    </div>

                    <div class="login-ele">
                        <input type="password" name="" id="" placeholder="Password" required>
                    </div>

                    <button type="submit" class="submit-button">Login</button>
                    
                </form> --}}


                {{-- @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
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

                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div class="login-ele">
                        <input name="admin_id" id="admin_id" placeholder="Admin ID" required>
                    </div>

                    <div class="login-ele">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="submit-button">Login</button>
                </form>
            </div>
        </div>

        <div class="right-div">

            <img src="/Pictures/image copy.png" alt="">
            
        </div>
    </div>
</body>
</html>