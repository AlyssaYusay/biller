@extends('layouts.sidebar')


<style>
  /* div#app{
    height: 100vh;

  } */
  #app{
    background-color: white;
  }

  body{
    background-color: white;
  }

  div.card{
  border-radius: 20px;
  }

  .border{
    border-radius: 10px;
  }

  #btn{
    border-radius: 10px;
    background-color: #FFB20C;
    color: white;
  }

  #btn:hover{
   color: white;
    filter:brightness(80%)
  }

.btn{
    border-radius: 10px;
    background-color: #FFB20C;
    color: white;
  }

  .btn:hover{
   color: white;
    filter:brightness(80%)
  }
  .form-select{
    border-radius: 10px;
  }
 
.section{
  padding-top: 5rem;
  padding-bottom: 10rem;
}
/* media query */
  @media screen and (max-width: 480px){
p.current{
  font-size: 1.5rem;
}

td{
  margin:0px;
}

th{
  margin:0px;
}
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

}

@media screen and (min-width: 768px) and (max-width:991px){
#position{
  margin-left: 10rem;
}
}
</style>


@section('content')
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
<section class="section">
<div class="container mt-5 pt-5 mb-5 pb-5" >
    <div class="row">
        <div class="col-xs col-sm col-md-8 col-md-offset-2" id="position">
            <div class="card shadow text-reset">
  

                <div class="card-body">
                  <div class="container-fluid">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <fieldset class="border pb-2">
                      <legend class="w-auto mx-3 border-0 mb-0 px-4">{{ $user->name}}</legend>
                        <div class="container-fluid">
                          <div class="lh-1">
                            <dl class="d-flex w-100 my-0">
                                <dt class="col-auto pe-2">Connection ID:</dt>
                                <dd class="col-auto flex-shrink-1 flex-grow-1">{{ $user->customerId }}</dd>
                            </dl>
                            <dl class="d-flex w-100 my-0">
                                <dt class="col-auto pe-2">Name:</dt>
                                <dd class="col-auto flex-shrink-1 flex-grow-1">{{ $user->name }}</dd>
                            </dl>
                            <dl class="d-flex w-100 my-0">
                                <dt class="col-auto pe-2">Email:</dt>
                                <dd class="col-auto flex-shrink-1 flex-grow-1">{{ $user->email }}</dd>
                            </dl>
                            <dl class="d-flex w-100 my-0">
                                <dt class="col-auto pe-2">Billing Address:</dt>
                                <dd class="col-auto flex-shrink-1 flex-grow-1">{{ $user->address }}</dd>
                            </dl>
                          </div>
                        </div>
                    </fieldset>
                    <div class="clear-fix"></div>
                    <div class="row text-center">
                      <h3 class="text-center my-2 pt-3">Pending Bill: 
                        <span class="text-muted">&#x20B1;  @php
                          use App\Http\Controllers\billController;
                          echo number_format(billController::calculate($user->id));
                          @endphp    </span>
                      </h3>
                    </div>
                    <center>
                      <hr class="bg-primary bg-opacity-100" width="40%" style="opacity: 1; height:2px my-1">
                    </center>
                    <div class="clear-fix"></div>


                    <div class="clear-fix py-3"></div>
                    <fieldset class="border pb-4">
                      <legend class="w-auto mx-3 border-0 mb-0 px-4">Issued Bills</legend>
                      <div class="container-fluid">
                        <table class="table table-striped table-bordered">
                          <thead class="thead-dark">
                              <tr>
                                <th scope="col">Month</th>
                                <th scope="col">Year</th>
                                <th scope="col">Status</th>
                                <th scope="col">Amount</th>
                              </tr>
                          </thead>
                          {{-- <tbody>
                              @foreach($data as $value)
                              <tr>
                                    <td>{{$value->month}}</td>
                                    <td>{{$value->year}}</td>
                                    <td>{{$value->status}}</td>
                                    <td>{{$value->amount}}</td>
                              </tr>
                              @endforeach
                          </tbody> --}}
                          </table>
                      </div>
                    </fieldset>
                    <div class="clear-fix mb-3"></div>                    
 
                     
                 
                    
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection


