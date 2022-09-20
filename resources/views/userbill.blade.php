@extends('layouts.app')


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


@media screen and (min-width: 768px) and (max-width:991px){
#position{
  margin-left: 10rem;
}
}


</style>


@section('content')
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


