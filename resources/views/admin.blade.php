@extends('layouts.app')
{{-- @extends('layouts.sidebar') --}}

<style>

  div.card{
    border-radius: 20px;
  }

  .border{
    border-radius: 10px;
  }

  #btn{
   border-radius:20px;
  background-color:#FFB20C;
  color: white;
}
  #btn:hover{
  color: white;
  filter:brightness(80%)
}
  .form-select{
    border-radius: 10px;
  }


/* .section{
  display: flex;
  justify-content: center;
  align-content: center;
  align-items: center;
}

.container{
  display: flex;
  justify-content: center;
  align-content: center;
  align-items: center;
} */


               /* media query */
 @media screen and (max-width: 480px){

  p.current{
    font-size: 1.5rem;
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
  width: 240px;
  z-index: 600;
  background-color: transparent;
  shadow: none;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.position-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 1rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

@media screen and (min-width: 768px) and (max-width:991px){
#position{
  margin-left: 10rem;
}
}
</style>


@section('content')
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">

          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-money-bill fa-fw me-3"></i><span>Create Bill</span></a
        >
          <a href="{{url('/admin/data')}}" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-users fa-fw me-3"></i><span>Customers</span></a
        >
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Bills</span></a
          >
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

<section class="section">
<div class="container mt-5 pt-5 mb-5 pb-5" id="container">
        <div class="col-xs col-sm col-md-8 col-md-offset-2 col-lg col-xl col-xxl" id="position">
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
                    

                    <form class="form-horizontal" action="{{ route('admin.store') }}" method="POST">
                        {{ csrf_field() }}
                        <fieldset class="border pb-3 mb-3">
                        <!-- Form Name -->
                        <legend class="w-auto mx-3 px-4 border-0 mt-n4 h4 fw-bolder">New Bill Entry</legend>

                        <div class="container-fluid">
                        <!-- Text input-->
                        <div class="mb-3">
                          <label class="control-label" for="customerId">Customer ID</label>  
                          <input id="customerId" name="customerId" placeholder="" class="form-control rounded-0" required="" type="text">
                        </div>

                        <!-- Text input-->
                        <div class="mb-3">
                          <label class="control-label" for="initial">Initial Reading</label>  
                          <input id="initial" name="initial" placeholder="kwh" class="form-control rounded-0 text-end" required="" type="number" step="any">
                        </div>

                        <!-- Text input-->
                        <div class="mb-3">
                          <label class="control-label" for="final">Final Reading</label>  
                          <input id="final" name="final" placeholder="kwh" class="form-control rounded-0 text-end" required="" type="number" step="any">
                        </div>

                        <!-- Select Basic -->
                        <div class="mb-3">
                          <label class="control-label" for="month">Month</label>
                          <div class="">
                            <select id="month" name="month" class="form-select rounded-0">
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
                              <option value="Decemeber">Decemeber</option>
                            </select>
                          </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="mb-3">
                          <label class="control-label" for="year">Year</label>
                          <div class="">
                            <select id="year" name="year" class="form-select rounded-0">
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
                        </div>

                        <!-- Button -->
                        <div class="mb-3">
                          <div class="d-grid">
                            <button type="submit" class="btn fw-bold" id="btn">Submit</button>
                          </div>
                        </div>
                        </div>
                        </fieldset>
                        </form>
                        <form class="form-inline" action="{{ route('admin.updaterate') }}" method="POST">
                            {{ csrf_field() }}

                            <fieldset class="border pb-3 mb-3">

                              <!-- Form Name -->
                              <legend class="w-auto mx-3 px-4 border-0 mt-n4 h4 fw-bolder">Update Electricty Rate</legend>
                              <div class="container-fluid">
                                <p class="current">Current Rate = <span class="rate" style="color:#0072CE;">&#x20B1; {{ Auth::user()->rate }} </span></p>
                                
                                <!-- Text input-->
                                <div class="mb-3">
                                  <label class="control-label" for="rate">New Rate</label>  
                                  <input id="rate" name="rate" placeholder="" class="form-control rounded-0 text-end" required="" type="number" step="any">
                                </div>
                                <!-- Button -->
                                <div class="mb-3">
                                  <div class="d-grid">
                                    <button type="submit" class="btn fw-bold" id="btn">Update</button>
                                  </div>
                                </div>
                              </div>
                            </fieldset>
                        </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
