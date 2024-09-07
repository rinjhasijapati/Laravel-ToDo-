@extends('welcome')

@section('content')


    <div class="relative overflow-x-auto m-2">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Task
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($todos as $todo)
            <tr class="bg-white dark:bg-gray-800">

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <p class="{{ $todo->completed ? 'line-through text-gray-500' : '' }}">{{ $todo->title }}</p>
                </th>
                <td class="px-6 py-4">
                    <form method="POST" action="{{ route('update', $todo->id) }}">
                        @csrf
                        <button type="submit" name="done" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" value="Update">Done</button>
                    </form>
                </td>
                <td class="px-6 py-4">
                    <form method="POST" action="{{ route('delete', $todo->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="delete" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" value="Delete">Delete</button>
                    </form>
                </td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
@endsection
