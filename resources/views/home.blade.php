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
                <div class="card-header">
                  <div class="card-title h3 my-2 text-center fw-bold"><span style="color:#0072CE;">Welcome</span>, {{ Auth::user()->name }}!</div>
                </div>

                <div class="card-body">
                  <div class="container-fluid">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <fieldset class="border pb-2">
                      <legend class="w-auto mx-3 border-0 mb-0 px-4">Your Details</legend>
                        <div class="container-fluid">
                          <div class="lh-1">
                            <dl class="d-flex w-100 my-0">
                                <dt class="col-auto pe-2">Connection ID:</dt>
                                <dd class="col-auto flex-shrink-1 flex-grow-1">{{ Auth::user()->customerId }}</dd>
                            </dl>
                            <dl class="d-flex w-100 my-0">
                                <dt class="col-auto pe-2">Name:</dt>
                                <dd class="col-auto flex-shrink-1 flex-grow-1">{{ Auth::user()->name }}</dd>
                            </dl>
                            <dl class="d-flex w-100 my-0">
                                <dt class="col-auto pe-2">Email:</dt>
                                <dd class="col-auto flex-shrink-1 flex-grow-1">{{ Auth::user()->email }}</dd>
                            </dl>
                            <dl class="d-flex w-100 my-0">
                                <dt class="col-auto pe-2">Billing Address:</dt>
                                <dd class="col-auto flex-shrink-1 flex-grow-1">{{ Auth::user()->address }}</dd>
                            </dl>
                          </div>
                        </div>
                    </fieldset>
                    <div class="clear-fix"></div>
                    <div class="row text-center">
                      <h3 class="text-center my-2 pt-3">You Have a pending Bill Amount of: 
                        <span class="text-muted">&#x20B1;  @php
                          use App\Http\Controllers\billController;
                          echo number_format(billController::calculate(Auth::user()->customerId));
                          @endphp    </span>
                      </h3>
                    </div>
                    <center>
                      <hr class="bg-primary bg-opacity-100" width="40%" style="opacity: 1; height:2px my-1">
                    </center>
                    <div class="clear-fix"></div>
                    @php
                      if(billController::calculate(Auth::user()->customerId) > 0) :
                    @endphp
                    <fieldset class="border pb-4">
                      <legend class="w-auto mx-3 border-0 mb-0 px-4">Payment</legend>
                      <div class="container-fluid">
                        <div class="row justify-content-center">
                          <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                            <div class="d-grid">
                              <a href="{{url('/home/paypal')}}" class="btn px-4 fw-bold" id="btn"> Pay</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    @php
                      endif;
                    @endphp
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
                          <tbody>
                              @foreach($data as $value)
                              <tr>
                                    <td>{{$value->month}}</td>
                                    <td>{{$value->year}}</td>
                                    <td>{{$value->status}}</td>
                                    <td>{{$value->amount}}</td>
                              </tr>
                              @endforeach
                          </tbody>
                          </table>
                      </div>
                    </fieldset>
                    <div class="clear-fix mb-3"></div>                    
                    <fieldset class="border pb-4">
                      <legend class="w-auto mx-3 border-0 mb-0 px-4">Download Bills</legend>
                      <div class="container-fluid">
                        <form class="form-inline" action="{{route('home.pdf')}}" method="POST" target="_blank">
                          {{csrf_field()}}
                          <!-- Form Name -->
                          <div class="row align-items-end">
                            <!-- Select Basic -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                              <label class=" control-label" for="month">Month</label>
                              <select id="month" name="month" class="form-select">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                              </select>
                            </div>
    
                            <!-- Select Basic -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                              <label class=" control-label" for="year">Year</label>
                              <select id="year" name="year" class="form-select">
                                @php
                                for($i= (date("Y") - 20); $i < (date("Y") + 5); $i++ ):
                                $year = $i;
                                @endphp
                                <option <?= $i == date('Y')? "selected" : '' ?>><?= $i ?></option>
                                
                                @php
                                endfor;
                                @endphp
                              </select>
                            </div>
                            <!-- Button -->
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                                <div class="d-grid">
                                  <button type="submit" class="btn btn-sm fw-bold" id="btn">Download</button>
                                </div>
                              </div>
  
                          </div>
                        </form>
                      </div>
                    </fieldset>
                    
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection


<script type='text/javascript'>
  (function(I, L, T, i, c, k, s) {if(I.iticks) return;I.iticks = {host:c, settings:s, clientId:k, cdn:L, queue:[]};var h = T.head || T.documentElement;var e = T.createElement(i);var l = I.location;e.async = true;e.src = (L||c)+'/client/inject-v2.min.js';h.insertBefore(e, h.firstChild);I.iticks.call = function(a, b) {I.iticks.queue.push([a, b]);};})(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', 'NnapDrn32MoApNs2t_c', {});
</script>