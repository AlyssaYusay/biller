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
    
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script
            src="https://kit.fontawesome.com/656d817613.js"
            crossorigin="anonymous"></script>
             <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
             <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>


        <!-- Styles -->
        <style>
           html, body {
                background-color: white;
                background-image: url("../images/wind.jpg");
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 600;
                height: 100vh;
                background-size: cover;
                margin: 0px;
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
                font-size: 4.5rem;
                display: flex;
                flex-direction: column;
                justify-content:center;
                align-content: center;
                align-items: center;
                margin-top:13rem;
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
            }

            .hours{
                color: #F15623
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
            background-color:#F15623;
            color: white;
}
            .btn:hover{
                color: white;
                filter:brightness(80%)
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
                    margin-top:23rem;
                    padding-top: 19rem;
                }
                
                .column.iconify{
                    flex-direction: row;
                align-content:center;
                }

                .container-fluid{
                    padding: 0px;
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
                    margin-top:23rem;
                    padding-top: 19rem;
                }
                
                .column.iconify{
                    flex-direction: row;
                align-content:center;
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
                    margin-top:23rem;
                    padding-top: 13rem;
                }
                
                .column.iconify{
                    flex-direction: row;
                align-content:center;
                }
        }           
        @media screen and (min-width: 768px) and (max-width:991px){
            .title{
                    font-size: 3.5rem;
                    margin-left: 1rem;
                    margin-top: 15rem;
                }

                .links > a {
                color: black;
                padding: 0 10px;
                }

            #register_container{
                margin-top: 5rem;
            }
        }       
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{url('/admin/login')}}" class="text-light">Admin Login</a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"></a>
                        <a href="{{ route('register') }}"></a>
                    @endauth
                </div>
            @endif

       
                <div class="container mt-5">
                    <div class="row mt-5 mb-5">
                      <div class="col-xs col-sm col-md-4 col-lg-6 col-xl-6 col-xxl-6">
                <div class="title m-b-md text-center d-flex align-items-center">
                    MERALCA ONLINE
                    <h3 class="sub fw-bold text-center">Powering your homes <span class="hours">24/7</span></h3>
                    <div class="row">
                        <div class="col-xs col-sm col-md col-lg col-xl col-xxl">
                   <span class="iconify" data-icon="entypo:light-bulb"></span>
                   </div>
                   <div class="col-xs col-sm col-md col-lg col-xl col-xxl">
                   <span class="iconify" data-icon="simple-line-icons:paypal"></span>
                   </div>
                </div>
                </div>
                      </div>
                      <div class="col-xs col-sm col-md-8 col-lg-6 col-xl-6 col-xxl-6  mb-5">

                        <div class="container" id="register_container">
                            <div class="col-xs-8 col-sm col-md col-lg col-xl-10 col-xxl-10">
                                <div class="card shadow text-reset">
                                    <div class="card-header">
                                        <div class="card-title h3 my-2 text-center fw-bolder">Register</div>
                                    </div>
                        
                                    <div class="card-body">
                                        <div class="container-fluid">
                                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                            {{ csrf_field() }}
                        
                                            <div class="mb-3{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="name" class="control-label">Name</label>
                        
                                                <div class="">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                        
                                            <div class="mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="control-label">Email Address</label>
                        
                                                <div class="">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="customerId" class="control-label">Connection Id</label>
                                                
                                                <div class="">
                                                    <input id="customerId" type="text" class="form-control" name="customerId" required>
                                                    @if ($errors->has('customerId'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('customerId') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="address" class="control-label">Address</label>
                        
                                                <div class="">
                                                    <input id="address" type="text" class="form-control" name="address" required>
                                                </div>
                                            </div>
                                            <div class="mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password" class="control-label">Password</label>
                        
                                                <div class="">
                                                    <input id="password" type="password" class="form-control" name="password" required>
                        
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                        
                                            <div class="mb-3">
                                                <label for="password-confirm" class="control-label">Confirm Password</label>
                                                <div class="">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                            </div>
                        
                                            <div class="mb-3">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn">
                                                        Register
                                                    </button>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 mb-3">
                                                <p class="mt-3">Already have an account?</p>
                                                    </div>
                                                    <div class="col-xs col-sm col-md col-lg col-xl col-xxl mt-3">
                                                <a href="{{ route('welcome') }}" class="text-decoration-none ">Login</a>
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
      
    </body>
</html>