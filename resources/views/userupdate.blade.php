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
         background-color: #0072CE;
         color: white;
    }
     #btn:hover{
         color: white;
         filter:brightness(80%)
      }



</style>


@section('content')
<div class="container" id="container">
<form action="{{ route('updateuser') }}" method="POST">
@csrf
    <label class="relative block p-3 border-2 border-gray-200 rounded-lg" for="customerId">
        <span class="text-xs font-medium text-gray-500" for="customerId">
            Customer ID
        </span>
        <input type="hidden" value="{{ $user->id }}" name="user_id" />
        <input value="{{ $user->customerId }}" class="w-full p-0 text-sm border-none focus:ring-0" id="customerId" name="customerId" type="text" required />
    </label>
    <label class="mt-3 relative block p-3 border-2 border-gray-200 rounded-lg" for="name">
        <span class="text-xs font-medium text-gray-500" for="name">
            Name
        </span>
        <input value="{{ $user->name }}" class="w-full p-0 text-sm border-none focus:ring-0" id="name" name="name" type="name" required />
    </label>
    <button type="submit"
        class="btn fw-bold"
        id="btn"
        data-rounded="rounded-md">
        Update User
    </button>
</form>
</div>
@endsection