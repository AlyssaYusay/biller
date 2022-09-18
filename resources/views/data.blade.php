@extends('layouts.app')


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
         text-decoration: none;
      }


    form{
        display: flex;
        justify-content: center;
      }
    
    @media (min-width: 991.98px) {
  main {
    padding-left: 240px;
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

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

/* #alert{
  display: flex;
  justify-content: center;
  align-content: center;
  align-items: center;
  max-width: 300px;
  max-height: 100px;
} */

</style>




@section('content')

    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
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

    <table class="table table-striped table-bordered" id="table">
        <thead>
            <tr>
                <th class="">
                    <div class="d-flex justify-content-center">
                        Customer Id
                    </div>
                </th>
                <th class="">
                    <div class="d-flex justify-content-center">
                        Name
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
                <td class="font-medium text-gray-900 whitespace-nowrap">
                    {{ $user->customerId }}
                </td>
                <td class="text-gray-700 whitespace-nowrap">{{ $user->name }}</td>
 
                <td>
                    <form onsubmit="return confirm('Do you really want to delete this user?');"
                        action="{{ route('deleteuser') }}" method="post">

                        {{-- check if we have delete user route --}}
                        @csrf
                       
                        <a href="{{ url('/admin/userupdate/'.$user->id) }}"
                            class="update text-decoration-none fw-bold">
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


@endsection