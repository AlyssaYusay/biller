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
    div#container{
        display: flex;
        justify-content: center;
        align-content: center;
        padding-top: 10rem;
        padding-bottom: 20rem;
    }

    div#app{
        height: 100vh;
    }

    div#container#table{
        padding: 0px;
        border-radius: 20px;
    }

    #btn{
         border-radius:20px;
         background-color:#cf1b0e;
         color: white;
    }
     #btn:hover{
         color: white;
         filter:brightness(80%)
      }


      /*  */
    .update{
        padding: .8rem 1rem;
        background-color: #0072CE;
        color: white;
        border-radius: 20px;
        margin-right: 1rem;
    }

    .update:hover{
         color: white;
         filter:brightness(80%)
        
      }

      .view{
        padding: .8rem 1.2rem;
        background-color: orange;
        color: white;
        border-radius: 20px;
        margin-right: 1rem;
    }

    .view:hover{
         color: white;
         filter:brightness(80%)
    
      }
    #form{
        display: flex;
        justify-content: center;
      }
    
.table{
  border-radius: 20px;
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  z-index: 600;
  background-color: transparent;
  shadow: none;
}

.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}


nav#sidebarMenu{
  width:200px;
  box-shadow: none;
}


.position-sticky {
  position: relative;
  top: 0;
  width:200px;
  padding-top: 1rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}


 /* media query */
@media screen and (max-width: 480px){

p.current{
  font-size: 1.5rem;
}

    #btn{
         border-radius:20px;
         background-color:#cf1b0e;
         color: white;
    }
     #btn:hover{
         color: white;
         filter:brightness(80%)
      }


      /*  */
    .update{
        padding: .5rem 1rem;
        background-color: #0072CE;
        color: white;
        border-radius: 20px;
        margin-right: 1rem;
    }

    .update:hover{
         color: white;
         filter:brightness(80%)
        
      }

      .view{
        padding: .5rem 1.2rem;
        background-color: orange;
        color: white;
        border-radius: 20px;
        margin-right: 1rem;
    }

    .view:hover{
         color: white;
         filter:brightness(80%)
    
      }


      table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr{ 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}


  table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
}

@media screen and (min-width: 768px) and (max-width:991px){
#position{
  margin-left: 10rem;
}
}

/* media query */
@media screen and (max-width: 480px){
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

                 
                  
              </div>
          </div>
      </nav>



{{-- @section('content') --}}

    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse" style="box-shadow: none;">
        <div class="position-sticky">
          <div class="list-group list-group-flush mx-3 mt-4">
            <a href="{{url('/admin')}}" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-money-bill fa-fw me-3"></i><span>Create Bill</span></a
          >
            <a href="{{url('/admin/data')}}" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-users fa-fw me-3"></i><span>Customers</span></a
          >
            {{-- <a href="#" class="list-group-item list-group-item-action py-2 ripple"
              ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Bills</span></a
            > --}}
          </div>
        </div>
      </nav>
      <!-- Sidebar -->

      {{-- alert --}}
@if (Session::has('success'))
<div class="alert alert-primary" role="alert">
    <div class="flex">
        <p class="text-center">{{ Session::get('success') }}</p>
    </div>
</div>
@endif

@if (Session::has('deleted'))
<div class="alert alert-primary" role="alert">
    <div class="flex">
        <p class="text-center">{{ Session::get('deleted') }}</p>
    </div>
</div>
@endif
{{-- end alert --}}
<div class="container" id="container">

    <table class="table table-striped" id="table">
        <thead>
            <tr>
                <th class="">
                    <div class="d-flex justify-content-center">
                        Customer ID
                    </div>
                </th>
                <th class="">
                    <div class="d-flex justify-content-center">
                        Name
                    </div>
                </th>
                <th class="">
                  <div class="d-flex justify-content-center">
                      Address
                  </div>
              </th>
                <th class="">
                    <div class="d-flex justify-content-center">
                        Actions
                    </div>
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach($users->reverse() as $user)
            <tr>
                <td>
                    {{ $user->customerId }}
                </td>
                <td >{{ $user->name }}</td>
                <td >{{ $user->address }}</td>
                <td>
                    <form id="form" onsubmit="return confirm('Do you really want to delete this user?');"
                        action="{{ route('deleteuser') }}" method="post">

                        {{-- check if we have delete user route --}}
                        @csrf

                      {{-- actions --}}

                        <a href="{{ url('/admin/userbill/'.$user->id) }}"
                          class="view text-decoration-none fw-bold" id="view">
                          View
                      </a>
                        <a href="{{ url('/admin/userupdate/'.$user->id) }}"
                            class="update text-decoration-none fw-bold" id="update">
                            Update
                        </a>
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button type="submit"
                            class="btn fw-bold" id="btn">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>


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
