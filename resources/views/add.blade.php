@extends('welcome')

@section('content')
    <div class="flex flex-col justify-center items-center m-5">
        <h2 class="text-4xl font-extrabold dark:text-white mb-4">ToDo List</h2>
        <div class="w-full max-w-md">
            <form method="POST" action="{{route('store')}}" class="flex space-x-2">
                @csrf
                <input type="text" id="todo_text"
                       name="todo_text"
                       class="flex-grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Enter your task..." required/>
                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        value="submit">Add
                </button>
            </form>
        </div>
    </div>
@endsection
