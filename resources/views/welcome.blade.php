<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
     />
     <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Styles -->
    <link rel="icon" href="../images/favicon2.ico" type="image/x-icon">
    
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script
            src="https://kit.fontawesome.com/656d817613.js"
            crossorigin="anonymous"></script>
             <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
             <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>


    <style>
        /* welcomeBlade */

.hero-section{
    background-color: #0072CE;
    background-image: url("../images/online-payments.png");
    color: black;
    /* font-family: 'Raleway', sans-serif; */
    font-weight: 600;
    height: 100vh;
    background-size: contain;
    background-position: start;
    background-repeat: no-repeat;
    margin: 0;
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
    margin: auto;
}

.content {
    text-align: center;
}

.title {
    font-size: 7rem;
    display: flex;
    flex-direction: column;
    justify-content:center;
    align-content: center;
    align-items: center;
    
    /* -webkit-text-stroke: 1px blue; */
    /* -webkit-text-fill-color: white; */
    /* text-shadow: 0px 1px 4px #23430C; */
}

.links > a {
    color: black;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}

.title,.sub{
    color:white;
    /* text-shadow: -1px 1px 2px #000,
      1px 1px 2px #000,
      1px -1px 0 #000,
      -1px -1px 0 #000; */
    text-decoration: none;
    display: flex;
    flex-direction: column;
    justify-content:center;
    align-content: center;
    align-items: center;
    
}


.hours{
    color: #FFB20C;
}


body>#app>.container{
flex-shrink: 1;
flex-grow: 1;
display: flex;
align-items: center;
justify-content: center;
background-color: transparent;
}

.card{
border-radius:20px;
padding: 1rem;
}

.btn{
border-radius:20px;
background-color:#FFB20C;
color: white;
}
.btn:hover{
    color: white;
    filter:brightness(80%)
}


.image{
    position: absolute;
    bottom: 1px;
    left: 1px;
    max-width: 900px;
}


.list{
padding-top: 5rem;
padding-bottom: 3rem;
}

.list2{
padding-top: 2rem;
padding-bottom: 10rem;
}


.banner{
background-color: #0072CE;
padding-top: 5rem;
padding-bottom: 5rem;
}


.request-button{
    background-color: #FFB20C;
    color: white;
    border: 0px;
    border-radius: 20px;
    padding: .5rem 3rem;
    font-size: 1.2rem;
    text-decoration: none;
}

.request-button:hover{
    color: white;
    filter: brightness(80%)
}

    /* media query */
    @media screen and (max-width: 480px){
    .top-right{
    padding-left: 10rem;
    padding-right:0;
    }

    .links > a {
    color: black;
    padding: 0 5px;
    }
    .title{
        font-size: 3.5rem;
        margin-top:1rem;
        padding-top: 4rem;
    }
    
    .column.iconify{
        flex-direction: row;
    align-content:center;
    }

    .container-fluid{
        padding: 0px;
    }

    .hero-section{
        background-image: none;
    }

    #request-button{
       padding-top: 1rem;
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
.top-right{
    padding-left: 10rem;
    padding-right:0;
    }

    .links > a {
    color: black;
    padding: 0 5px;
    }
    .title{
        font-size: 3.5rem;
        margin-top:1rem;
        padding-top: 4rem;
    }
    
    .column.iconify{
        flex-direction: row;
    align-content:center;
    }

    .hero-section{
        background-image: none;
    }
    #request-button{
       padding-top: 1rem;
    }

    #footer-row{
        display:flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        align-content: center;

    }
}



@media screen and (min-width: 576px) and (max-width:767px){
.top-right{
    padding-left: 10rem;
    padding-right:0;
    }

    .links > a {
    color: black;
    padding: 0 5px;
    }
    .title{
        font-size: 3.5rem;
        /* margin-top:1rem; */
        padding-top: 1rem;
    }
    
    .column.iconify{
        flex-direction: row;
    align-content:center;
    }

    .hero-section{
        background-image: none;
    }

    .request-button{
        font-size: .8rem;
    }

    #request-button{
       padding-top: 3rem;
    }

    #footer-row{
        display:flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        align-content: center;

    }
}           
@media screen and (min-width: 768px) and (max-width:991px){
.title{
        font-size: 3.5rem;
        margin-left: 1rem;
    }

    .links > a {
    color: black;
    padding: 0 10px;
    }

    .hero-section{
    background-size: cover;
    }

    #request-button{
       padding-top: 3rem;
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
 
    </head>
 <body>
<section class="hero-section">

        <div class="flex-center position-ref full-height">
            
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{url('/admin/login')}}" class="text-light">Admin Login</a>
                    @auth
                        <a href="{{ url('/home') }}" class="text-light">Home</a>
                    @else
                        <a href="{{ route('login') }}"></a>
                        <a href="{{ route('register') }}"></a>
                    @endauth
                </div>
            @endif

       
                <div class="container mt-5">
                    <div class="row mt-5 mb-5">
                      <div class="col-xs col-sm col-md-4 col-lg-6 col-xl-6 col-xxl-6">
                <div class="title m-b-md text-center mb-0">
                    MERALCA

                </div>
                <div class="sub m-b-md text-center ">
                    
                    <div class="row">
                    <h1 class="sub fw-bold text-center ">Powering your homes <span class="hours">24/7</span></h1>
                    </div>
                    <div class="row">
                        <div class="iconify col-xs col-sm col-md col-lg col-xl col-xxl mb-3">
                        <span class="iconify display-5" data-icon="akar-icons:thunder"></span>
                    </div>
                    <div class="iconify col-xs col-sm col-md col-lg col-xl col-xxl mb-3">
                        <span class="iconify display-5" data-icon="entypo:light-bulb"></span>
                    </div>
                   <div class="iconify col-xs col-sm col-md col-lg col-xl col-xxl mb-3">
                        <span class="iconify display-5" data-icon="simple-line-icons:paypal"></span>
                   </div>
                </div> 
                
                </div>
                      </div>


{{-- login container --}}
                      <div class="col-xs col-sm col-md-8 col-lg-6 col-xl-6 col-xxl-6  mb-5">

                <div class="container">
                    <div class="col-xs-8 col-sm col-md col-lg col-xl-10 col-xxl-10">
                        <div class="card shadow text-reset">
                            <!-- <div class="card-header">
                                <div class="card-title h3 my-2 text-center fw-bolder">Login</div>
                            </div> -->
                
                            <div class="card-body">
                                <div class="container-fluid">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                
                                        <div class="mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="control-label">Email</label>
                
                                            <div class="">
                                                <input id="email" type="email" class="form-control rounded-0" name="email" value="{{ old('email') }}" required autofocus>
                
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="control-label">Password</label>
                
                                            <div class="">
                                                <input id="password" type="password" class="form-control rounded-0" name="password" required>
                
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                
                                        <div class="mb-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                
                                        <div class="mb-3">
                                            <div class="d-grid">
                                                <button type="submit" class="btn fw-bold">
                                                    Login
                                                </button>
                                            </div>
                                        </div>
                
                                        <div class="mb-2">
                
                                            <a class="text-decoration-none" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                           
                                        </div>
                                        <div>
                                            <div class="row">                                                
                                                <div class="col-xs col-sm col-md col-lg col-xl col-xxl">
                                            <a href="{{ route('register') }}" class="text-decoration-none">Register Your Account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

{{-- end of login container --}}
    </div>
</section>

 <section class="list">
    <h1 class="text-center text-dark mb-5">Have the power to access your Meralca account wherever, whenever with</h1>
    <div class="container text-center" id="box">
       <div class="row">
            
           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl">
               <div class="card border-light">
                  <a href="editor.html"><img src="../images/paybills.png" height="150px" alt="" id="img"></a>
                  <p class="text mt-2">View and Pay Bills</p>
               </div>
            </div>

          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl">
             <div class="card border-light">
               <a href="#"><img src="../images/meralcometer.jpg" height="150px" alt="" id="img"></a>
                <p class="text mt-2">Apply For New Service</p>
             </div>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl">
             <div class="card border-light">
               <a href="#"><img src="../images/flashlight.png" height="120px" alt="" id="img" class="mt-2"></a>
                <p class="text mt-4">Report an Outage</p>
             </div>
          </div>


          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl">
           <div class="card border-light">
              <a href="#"><img src="../images/feedback.png" height="145px" alt="" id="img"></a>
              <p class="text mt-2">Give Feedback</p>
           </div>
        </div>


       </div>
    </div>
 </section>

 <section class="list2">
    <h1 class="text-center text-dark mb-5">Steps to Access your Bill</h1>
    <div class="container text-center" id="box">
    <div class="container text-center" id="box">
       <div class="row">
            
           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl">
               <div class="card border-dark">
                  <a href="../images/create&log.png"><img src="../images/create&log.png" height="250px" alt="" id="img"></a>
                  <p class="text mt-2">Register & Log-In your Account</p>
               </div>
            </div>

          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl">
             <div class="card border-dark">
               <a href="../images/SelectMonth.png"><img src="../images/SelectMonth.png" height="250px" alt="" id="img"></a>
                <p class="text mt-2">Select the Month of your Bill</p>
             </div>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl">
             <div class="card border-dark">
               <a href="../images/download.png"><img src="../images/download.png" height="223px" alt="" id="img" class="mt-2"></a>
                <p class="text mt-4">Download the PDF File</p>
             </div>
          </div>
        </div>


       </div>
    </div>
 </section>




<section class="banner shadow">
    <div class="container" id="banner_container">
        <div class="row">
            <div class="col-xs col-sm col-md col-lg col-xl-8 col-xxl-8 text-center">
<h1 class="text-light">Trusted Electricians, Home Advisor Approved</h1>
</div>
<div class="col-xs col-sm col-md col-lg col-xl-4 col-xxl-4 text-center mt-2" id="request-button">
<a href="#" class="request-button fw-bold shadow">Request Quote Now</a> 
</div>
</div>
</div>
</div>
</div>
</section>


  {{-- </footer> --}}
  <div class="container-fluid ms-auto shadow" style="background-color: white;">
        <footer class="container py-5" id="footer">
            <div class="row text-dark" id="footer-row">
                <div class="col-lg-3">
                    <h3>Contact Us:</h3>
                       <p>0009-001-0123</p>
                    <h3>Email:</h3>
                   <p>meralca.support@help.com</p>
            </div>
                   
              
                <div class="col-lg-5">
                    <h3>About Meralca</h3>
                    <p>is a private sector electric distribution utility company in the Philippines covering 10 cities and 5 municipalities. Meralca celebrates 10 years of service in 2022, committed to providing reliable and affordable energy.
                    </p>
                    
                </div>
                <div class="col-lg-4">
            
{{-- modal --}}
<div class="container mt-3">
    <h3>Subscribe to our newsletter</h3>
    <p>Get latest news from Meralca</p>
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" id="">
      Subscribe
    </button>
  </div>
  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Subscribe to our newsletter</h3>
          <br>
         
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            Get latest news from Meralca
        </div>
  <div>
    <input type="text" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="subscribe" class="">
    <button class="btn btn-success border-rad" type="button" id="subscribe">Subscribe</button>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
  </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>
{{-- modal --}}
                        {{-- <h3>Subscribe to our newsletter</h3>
                        <p>Get latest news from Meralca</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control me-2 "  name="emailadd"
                                placeholder="Email address">
                            <button type="button" class="btn btn-md" name="subscribeExpl" id="subscribe">Subscribe</button>
                            
                        </div> --}}
                    
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2022 Copyright: Meralca.com</p>
            </div>
        </footer>

                        
 <script type="text/javascript">
  (function () {
  emailjs.init('6JbWmxI3drDtjR65l'); //please encrypted user id for malicious attacks
  })();
         </script>
<script>


  emailjs.send("service_w09xyou", "template_9oqwaen", templateParams).then(
    function (response) {
      console.log("SUCCESS!", response.status, response.text);
      alert(placeorder);
      localStorage.clear();
      location.href = "index.html";
    },
    function (error) {
      console.log("FAILED...", error);
    }
  );



let subscribe = document.getElementById("subscribe");
subscribe.addEventListener("click", Subscribe);
</script>

 <script type='text/javascript'>
    (function(I, L, T, i, c, k, s) {if(I.iticks) return;I.iticks = {host:c, settings:s, clientId:k, cdn:L, queue:[]};var h = T.head || T.documentElement;var e = T.createElement(i);var l = I.location;e.async = true;e.src = (L||c)+'/client/inject-v2.min.js';h.insertBefore(e, h.firstChild);I.iticks.call = function(a, b) {I.iticks.queue.push([a, b]);};})(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', 'NnapDrn32MoApNs2t_c', {});
</script>
                
                
                
    </body>
</html>


