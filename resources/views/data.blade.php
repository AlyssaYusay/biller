@extends('layouts.app')
@section('content')

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

<div class="overflow-x-auto">
    <table class="min-w-full text-sm divide-y divide-gray-200">
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
{{--                 
                <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                    <div class="flex items-center">
                        Total Grade
                    </div>
                </th>
                <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                    <div class="flex items-center">
                        Actions
                    </div>
                </th> --}}
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-100">
            @foreach($users->reverse() as $user)
            <tr>
                <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $user->customerId }}
                </td>
                <td class="p-4 text-gray-700 whitespace-nowrap">{{ $user->name }}</td>
                {{-- <td class="p-4 text-gray-700 whitespace-nowrap">
                    @if( count($student->subjects) > 0 )
                    @if( $student->subjects->avg('grade') < 75) <strong
                        class="bg-red-100 text-red-700 px-3 py-1.5 rounded text-xs font-medium">
                        {{ $student->subjects->avg('grade') }}
                        </strong>
                        @else
                        <strong class="bg-green-100 text-green-700 px-3 py-1.5 rounded text-xs font-medium">
                            {{ $student->subjects->avg('grade') }}
                        </strong>
                        @endif
                        @endif
                </td> --}}
                <td>
                    <form onsubmit="return confirm('Do you really want to delete this user?');"
                        action="{{ route('deleteuser') }}" method="post">

                        {{-- check if we have delete user route --}}
                        @csrf
                        {{-- <button type="button" userid="{{ $user->id }}"
                            class="viewSubjects bg-blue-300 hover:bg-blue-400 text-xs text-blue-800 py-1 px-2 rounded mr-2 items-center">
                            View Subjects
                        </button> --}}
                        <a href="{{ url('userupdate/'.$user->id) }}"
                            class="bg-gray-300 hover:bg-gray-400 text-xs text-gray-800 py-1 px-2 rounded mr-2 items-center">
                            Update
                        </a>
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button type="submit"
                            class="bg-red-300 hover:bg-red-400 text-xs text-red-800 py-1 px-2 rounded items-center">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
$('.viewUsers').click(function(e) {
    e.preventDefault();
    $('#userarea').empty();
    $('#userarea').append('<h3>Fetching data...</h3>');
    let button = $(this);
    button.text('Fetching data...');
    const formData = {
        id: $(this).attr('userid')
    };

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data: formData,
        url: "{{ url('getusers') }}",
        dataType: "json",
        success: function(data) {
             $('#userarea').empty();
            data.forEach(function(user){
                $('#userarea').append('<li class="px-6 py-2 border-b border-gray-200 w-full">'+user.name+'</li>')
            });
            button.text('View Users');
        },
        error: function(data) {
            alert("There's an error.")
        }
    });

})
</script>
@endsection