<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome</title>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{asset('css/adminhome.css')}}">
  </head>

  <body>
    <div class="container">
      <aside>

        <div class="top">
          <div class="logo">
            {{-- <h2>Hi, <span class="danger">ADHIP</span> </h2> --}}
            <h2>Hi, <span class="danger">{{ strtoupper(explode(' ', session('admin')->admin_name)[0]) }}</span></h2>
          </div>
          <div class="close" id="close_btn">
            <span class="material-symbols-sharp">
              close
            </span>
          </div>
        </div>
        <!-- end top -->
        <div class="sidebar">

          <a href="/dashboard" class="active">
            <span class="material-symbols-sharp">grid_view </span>
            <h3>Dashboard</h3>
          </a>
          <a href="/adminuser">
            <span class="material-symbols-sharp">person_outline </span>
            <h3>Users</h3>
          </a>
          <a href="/adminpost">
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
            <span class="material-symbols-sharp">Settings </span>
            <h3>Settings</h3>
          </a>

          <a href="{{ route('admin.logout') }}">
            <span class="material-symbols-sharp">Logout </span>
            <h3>Logout</h3>
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
        <h1>Dashboard</h1>

        <div class="insights">

          <!-- start seling -->
          <div class="sales">
            <img src="/Images/up.gif" alt="">
            {{-- <span class="material-symbols-sharp">trending_up</span> --}}
            <div class="middle">

              <div class="left">
                <h3>Total Users</h3>
                {{-- <h1>25,024</h1> --}}
                <h1>{{ number_format($totalUsersLast24Hours) }}</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle r="30" cy="40" cx="40"></circle>
                </svg>
                <div class="number">
                  <p>80%</p>
                </div>
              </div>

            </div>
            <small>Last 24 Hours</small>
          </div>
          <!-- end seling -->
          <!-- start expenses -->
          <div class="expenses">
            <img src="/Images/post.gif" alt="">
            {{-- <span class="material-symbols-sharp">local_mall</span> --}}
            <div class="middle">

              <div class="left">
                <h3>Total Posts</h3>
                {{-- <h1>25,024</h1> --}}
                <h1>{{ number_format($totalPostsLast24Hours) }}</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle r="30" cy="40" cx="40"></circle>
                </svg>
                <div class="number">
                  <p>80%</p>
                </div>
              </div>

            </div>
            <small>Last 24 Hours</small>
          </div>
          <!-- end seling -->
          <!-- start seling -->
          <div class="income">
            <span class="material-symbols-sharp">stacked_line_chart</span>
            <div class="middle">

              <div class="left">
                <h3>Website Reach</h3>
                <h1> Top 95%</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle r="30" cy="40" cx="40"></circle>
                </svg>
                <div class="number">
                  <p>95%</p>
                </div>
              </div>

            </div>
            <small>Last 24 Hours</small>
          </div>
          <!-- end seling -->

        </div>
        <!-- end insights -->
        <div class="recent_order">
          <h2>Recent Users</h2>
          
          @if($users->isEmpty())
            <div class="main_wrapper">
              <div class="main">
                <div class="antenna">
                  <div class="antenna_shadow"></div>
                  <div class="a1"></div>
                  <div class="a1d"></div>
                  <div class="a2"></div>
                  <div class="a2d"></div>
                  <div class="a_base"></div>
                </div>
                <div class="tv">
                  <div class="cruve">
                    <svg
                      class="curve_svg"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 189.929 189.929"
                      xml:space="preserve"
                    >
                      <path
                        d="M70.343,70.343c-30.554,30.553-44.806,72.7-39.102,115.635l-29.738,3.951C-5.442,137.659,11.917,86.34,49.129,49.13
                    C86.34,11.918,137.664-5.445,189.928,1.502l-3.95,29.738C143.041,25.54,100.895,39.789,70.343,70.343z"
                      ></path>
                    </svg>
                  </div>
                  <div class="display_div">
                    <div class="screen_out">
                      <div class="screen_out1">
                        <div class="screen">
                          <span class="notfound_text"> NOT FOUND</span>
                        </div>
                        <div class="screenM">
                          <span class="notfound_text"> NOT FOUND</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="lines">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                  </div>
                  <div class="buttons_div">
                    <div class="b1"><div></div></div>
                    <div class="b2"></div>
                    <div class="speakers">
                      <div class="g1">
                        <div class="g11"></div>
                        <div class="g12"></div>
                        <div class="g13"></div>
                      </div>
                      <div class="g"></div>
                      <div class="g"></div>
                    </div>
                  </div>
                </div>
                <div class="bottom">
                  <div class="base1"></div>
                  <div class="base2"></div>
                  <div class="base3"></div>
                </div>
              </div>
            </div>
          @else
            <div class="recent-order-scroll">

              <table>
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th> Contact No</th>
                    <th> Email</th>
                    {{-- <th> Password</th> --}}
                    <th>Suspend Account</th>
                    <th>Action</th>
                  </tr>
                </thead>
              
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      {{-- <td>bdsfhdfhb</td>
                      <td>bdsfhdfhb</td>
                      <td>bdsfhdfhb</td>
                      <td>bdsfhdfhb</td> --}}
                      
    
    
                      <td>{{ $user->user_id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->contact_no ?? 'N/A' }}</td> 
                      <td>{{ $user->email }}</td>
                      {{-- <td>{{ $user->password }}</td> --}}
                      <td>
                        <label class="switch">
                          <input type="checkbox" onchange="confirmSuspendUser (this, {{ $user->user_id }})" {{ $user->suspend_account ? 'checked' : '' }}>
                          <div class="slider"></div>
                          <div class="slider-card">
                              <div class="slider-card-face slider-card-front"></div>
                              <div class="slider-card-face slider-card-back"></div>
                          </div>
                        </label>
    
                      </td>
                      <td class="button-container">
                        <!-- <button class="edit">Edit</button>  -->
    
                        <form action="{{ route('admin.delete.user', $user->user_id) }}" method="POST" class="delete-form" style="display: inline;">
                          @csrf
                          @method('DELETE') 
                          <button type="button" class="delete" onclick="confirmDelete(this, 'user')">
                              <p class="button-container-p">Delete</p>
                              <span class="icon-wrapper">
                                  <svg class="icon" width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16"
                                          stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                              </span>
                          </button>
                      </form>
    
                      </td>
                    </tr>
                  @endforeach
    
                  
                </tbody>
              </table>

            </div>
          @endif



          <!-- <a href="#">Show All</a> -->
        </div>

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
              {{-- <p><b>Adhip</b></p> --}}
              <p><b>{{(explode(' ', session('admin')->admin_name)[0]) }}</b></p>
              <p>Admin</p>
              <small class="text-muted"></small>
            </div>
            {{-- <div class="profile-photo">
              <img src="/Images/profile-1.jpg" alt="" />
            </div> --}}
            <div class="profile-photo">
              <a href="/adminprofile">
                @if($admin->profile_pic)
                    <img src="{{ asset('storage/' . $admin->profile_pic) }}" alt="Admin Profile Picture" />
                @else
                    <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Profile Picture" />
                @endif
              </a> 
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
                <p><b>Adhip</b> Upload his profile picture</p>
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
                <p><b>Adhip</b> Upload his profile picture</p>
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



    <script src="{{asset('js/adminhome.js')}}"></script>
  </body>

</html>