@extends('layouts.app')
@section('content')
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
        class="mt-3 mx-auto flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-purple-500 rounded-md md:mb-0 hover:bg-purple-700 md:w-auto"
        data-rounded="rounded-md">
        Update User
    </button>
</form>
@endsection