@extends('welcome')

@section('content')
    <div class="flex flex-col justify-center items-center p-20">
        @foreach($todos as $todo)
            <div class="m-10 flex items-center space-x-4">
                <p class="{{ $todo->completed ? 'line-through text-gray-500' : '' }}">{{ $todo->text }}</p>
                <form method="POST" action="{{ route('update', $todo->id) }}">
                    @csrf
                    <button type="submit" name="done" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" value="Update">Done</button>
                </form>
                <form method="POST" action="{{ route('delete', $todo->id) }}">
                    @csrf
                    <button type="submit" name="delete" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" value="Delete">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
