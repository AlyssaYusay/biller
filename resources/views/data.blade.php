@extends('layouts.app')


<style>
    div#container{
        display: flex;
        justify-content: center;
        align-content: center;
        padding-top: 5rem;
        padding-bottom: 32rem;
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



</style>

{{-- alert --}}
@if (Session::has('success'))
<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 mb-5" role="alert">
    <div class="flex">
        <p class="text-sm text-center">{{ Session::get('success') }}</p>
    </div>
</div>
@endif

@if (Session::has('deleted'))
<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 mb-5" role="alert">
    <div class="flex">
        <p class="text-sm text-center">{{ Session::get('deleted') }}</p>
    </div>
</div>
@endif
{{-- end alert --}}


@section('content')
<div class="container" id="container">
<div class="text-center">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                    <div class="flex items-center">
                        Customer Id
                    </div>
                </th>
                <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                    <div class="flex items-center">
                        Name
                    </div>
                </th>
        
                <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                    <div class="flex items-center">
                        Actions
                    </div>
                </th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-100">
            @foreach($users->reverse() as $user)
            <tr>
                <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $user->customerId }}
                </td>
                <td class="p-4 text-gray-700 whitespace-nowrap">{{ $user->name }}</td>
 
                <td>
                    <form onsubmit="return confirm('Do you really want to delete this user?');"
                        action="{{ route('deleteuser') }}" method="post">

                        {{-- check if we have delete user route --}}
                        @csrf
                       
                        <a href="{{ url('userupdate/'.$user->id) }}"
                            class="text-decoration-none fw-bold" style="color:#FFB20C;">
                            Update
                        </a>
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button type="submit"
                            class="btn" id="btn">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>
</div>

@endsection