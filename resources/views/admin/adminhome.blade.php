<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>



        <x-admin-layout>

            @include('partials._search') @if(count($admins) == 0)
            <p>No student found</p>
            @endif

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-1">
                                FirstName
                            </th>
                            <th scope="col" class="px-6 py-1">
                                LastName
                            </th>
                            <th scope="col" class="px-6 py-1">
                                Gender
                            </th>
                            <th scope="col" class="px-6 py-1">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-1">
                                Nationality
                            </th>
                            <th scope="col" class="px-6 py-1">
                                Religion
                            </th>
                            <th scope="col" class="px-6 py-1">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $admin)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $admin->fname}}
                            </th>
                            <td class="px-2 py-1">
                                {{ $admin->lname}}
                            </td>
                            <td class="px-2 py-1">
                                {{ $admin->gender}}
                            </td>
                            <td class="px-2 py-1">
                                {{ $admin->status}}
                            </td>
                            <td class="px-2 py-1">
                                {{ $admin->nationality}}
                            </td>
                            <td class="px-2 py-1">
                                {{ $admin->religion}}
                            </td>
                            <td class="px-3 py-1 text-right d-flex">
                                <a href="/admins/{{$admin->id}}/edit" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                                <form method="POST" action="/admins/{{$admin->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-red-800">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </x-admin-layout>


    </x-slot>


</x-app-layout>