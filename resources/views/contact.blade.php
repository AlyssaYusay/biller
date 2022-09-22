{{-- @extends('layouts.sidebar') --}}
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

        #btn-footer{
            background-color:#FFB20C;
            color:white;
            border-radius: 20px;
        }

        #btn-footer:hover{
            filter: brightness(80%)
            color:white;
        }
  div#app{
    height: 100vh;
  }
    #btn{
        border-radius: 10px;
    }

  .border{
    border-radius: 10px;
  }

  div#container{
    padding-top: 15rem;
  }

  #btn{
    background-color: #FFB20C;
   color: white;
  }
  #btn:hover{
   color: white;
    filter:brightness(80%)
  }

  .contact{
    padding-top: 15rem;
    padding-bottom: 15rem;
  }
 
  img{
    max-width:100%;
  }

 /* media query */
@media screen and (max-width: 480px){
    
  p.current{
  font-size: 1.5rem;
}
  
  #footer-row{
        display:flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        align-content: center;

    }
 }

 @media screen and (min-width: 481px) and (max-width:575px){
    #footer-row{
        display:flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        align-content: center;

    }
 }

 @media screen and (min-width: 576px) and (max-width:767px){
    #footer-row{
        display:flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        align-content: center;

    }
 }

 @media screen and (min-width: 768px) and (max-width:991px){

  #position{
  margin-left: 10rem;
}

  #footer-row{
        display:flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        align-content: center;

    }
 }

</style>
<body>
  <div id="app">
      <nav class="navbar navbar-expand-lg navbar-expand-md bg-light shadow">
          <div class="container">
              {{-- <div class="navbar-header"> --}}
                   <!-- Branding Image -->
                   <span class="iconify" data-icon="ant-design:thunderbolt-twotone" style="color:#FFB20C;"></span><a class="navbar-brand" id="navbar-brand" href="/">
                      MERALCA
                  </a>
                  
                  {{-- sidebar menu --}}
                  <button
                  class="navbar-toggler text-dark ms-auto"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#sidebarMenu"
               >
               <i class="fa-solid fa-bars-staggered"></i>
               </button>

                 
              {{-- </div> --}}

              <div class="collapse navbar-collapse" id="navmenu">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                    &nbsp;
                  </ul>

                 
                  
              </div>
          </div>
      </nav>


<section class="meter">
    <div class="container-fluid">
<img src="../images/meter1.jpg" alt="">
    </div>
  </section>

        <!-- Contact Us -->
<section class="contact">
    <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-1">
              <div class="card border-light">
                <h1 class="text-center mb-5">Contact Us</h1>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                        <span class="fw-bold">Main Location</span> UDENNA Tower
                        21st Floor, Udenna Tower, Rizal Dr, cor 4th Ave, Taguig, Metro Manila
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Phone</span> 0009-001-0123
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">E-mail</span>meralca.support@help.com
                    </li>
                </ul>
              </div>
            </div>

            <!-- Map -->
               <div class="col-md-4 offset-md-2" id="map">
                 <div class="card">
                    <iframe class="border bg-light shadow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.892259701603!2d121.0458099!3d14.548153299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e100837d0a9aaf7!2sUDENNA%20Tower!5e0!3m2!1sen!2sph!4v1653999137482!5m2!1sen!2sph" height="400px;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>
                </div>
            </div>
        </div>
   
</section>

{{-- @endsection --}}

{{-- </footer> --}}
<div class="container-fluid shadow" style="background-color: #f1f1f1;">
  <footer class="container py-5" id="footer">
      <div class="row text-dark" id="footer-row">
          <div class="col-lg-3">
              <h3>Contact Us:</h3>
                 <p>0009-001-0123</p>
              <h3>Email:</h3>
             <p>meralca.support@help.com</p>
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
                      <button type="submit" class="btn btn-md fw-bold" id="btn-footer" name="subscribeExpl">Subscribe</button>
                      
                  </div>
              </form>
          </div>
      </div>
      <hr>
      <div class=text-center>
          <p>&copy; 2022 Copyright: <a style="color: #6A7C92">Meralca.com</a></p>
      </div>
  </footer>



  </div>
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
