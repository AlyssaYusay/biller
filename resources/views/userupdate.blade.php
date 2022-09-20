@extends('layouts.sidebar')

<style>
    div#container{
        display: flex;
        justify-content: center;
        align-content: center;
        padding-top: 10rem;
    }


    div#app{
        height: 100vh;
    }
    
    #btn{
         border-radius:20px;
         background-color: #0072CE;
         color: white;
    }
     #btn:hover{
         color: white;
         filter:brightness(80%)
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

#form-update{
width: 60%;
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
            <a href="#" class="list-group-item list-group-item-action py-2 ripple"
              ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Bills</span></a
            >
          </div>
        </div>
      </nav>
      <!-- Sidebar -->

<div class="container" id="container">
<form action="{{ route('updateuser') }}" method="POST" id="form-update">
@csrf
  <div class="mb-3">
    <label for="customerId" class="form-label">Customer ID</label>
    <input type="hidden" value="{{ $user->id }}" name="user_id" />
    <input value="{{ $user->customerId }}" class="form-control" id="customerId" name="customerId" type="text" required />

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input value="{{ $user->name }}" class="form-control" id="name" name="name" type="name" required />
  </div>
  <div class="mb-3">
    <label class="form-label" for="address">Address</label>
    <input value="{{ $user->address }}" class="form-control" id="address" name="address" type="address" required />
  </div>

  <button type="submit" class="btn fw-bold" id="btn">Update User</button>
</form>
</div>
@endsection