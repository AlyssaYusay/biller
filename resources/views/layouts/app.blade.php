<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="../images/favicon2.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
 />
 <link
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script
        src="https://kit.fontawesome.com/656d817613.js"
        crossorigin="anonymous"></script>
         <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">
    @yield('custom_css')



    <style>
        #navbar-brand{
            color:#0072CE;
            font-weight: 900; 
        }

        #nav-link{
            color:#6A7C92;
            margin-left: 10px;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-expand-md bg-light shadow">
            <div class="container">
                {{-- <div class="navbar-header"> --}}
                     <!-- Branding Image -->
                     <span class="iconify" data-icon="ant-design:thunderbolt-twotone" style="color:#FFB20C;"></span><a class="navbar-brand" id="navbar-brand" href="/">
                        MERALCA
                    </a>
                    
                    <!-- Collapsed Hamburger -->
                    <button
                    class="navbar-toggler text-dark ms-auto"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navmenu"
                 >
                    <i class="fa-solid fa-bars"></i>
                 </button>

                   
                {{-- </div> --}}

                <div class="collapse navbar-collapse" id="navmenu">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class='nav-item'><a class="nav-link" id="nav-link" href="{{ route('welcome') }}">User Login</a></li>
                            <li class='nav-item'><a class="nav-link" id="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle fw-bold" style="color:#6A7C92" data-bs-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} </span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Remove the container if you want to extend the Footer to full width. -->

    <footer class="text-center text-dark p-5" style="background-color: rgba(0, 0, 0, 0.2);">
        <h4 class="pb-5">Get the latest news and service advisories from Meralca.</h4>
   
        <!-- Twitter -->
        <a
          class="btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a
          class="btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a
          class="btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a
          class="btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-linkedin"></i
        ></a>
        
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <!-- <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2); ">
      © 2022 Copyright:
      <a style="color:
      #6A7C92">Meralca.com</a>
    </div> -->
    <!-- Copyright -->
  </footer>
  <div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.2); ">
        <footer class="container py-5">
            <div class="row text-dark">
                <div class="col-lg-3">
                    <h3>Contact Us:</h3>
                    <ul class="nav">
                        <li class="nav-item mb-2">0009-001-0123 <br/> 0009-001-0124 <br/> 0009-001-0125</li>
                       
                        
                    </ul>
                    <h3 class="pt-3">or Email Us at</h3>
                    <ul class="nav">
                    <li class="nav-item mb-2">meralca.support@help.com</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3>About Meralca</h3>
                    <p>is a private sector electric distribution utility company in the Philippines covering 10 cities and 5 municipalities. Meralca celebrates 10 years of service in 2022, committed to providing reliable and affordable energy.
                    </p>
                    
                </div>
                <div class="col-lg-4 offset-1">
                <form action="../send.php" method="post">
                        <h3>Subscribe to our newsletter</h3>
                        <p>Get latest news from Meralca</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control me-2 "  name="emailadd"
                                placeholder="Email address">
                            <button type="submit" class="btn " name="subscribeExpl">Subscribe</button>
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>&copy; 2022 Copyright: <a style="color: #6A7C92">Meralca.com</a></p>
            </div>
        </footer>

  <!-- End of .container -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
      $(".sidebar ul li").on('click', function(){
        $(".sidebar ul li.active").removeClass("active");
        $(this).addClass('active');
      });

        $('.open-btn').on('click', function(){
          $('.sidebar').addClass('active');
        });

        $('.close-btn').on('click',function(){
          $('.sidebar').removeClass('active');
        });
    </script>
</body>
</html>
