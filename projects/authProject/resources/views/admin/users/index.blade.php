{{-- filepath: resources/views/admin/users/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center min-h-[80vh] bg-gray-100 dark:bg-gray-900 pt-28 px-4">
    <div class="w-full max-w-5xl p-8 bg-white dark:bg-gray-800 rounded-xl shadow-xl flex flex-col items-center">
        <h2 class="text-5xl font-extrabold text-blue-700 dark:text-blue-300 tracking-tight text-center w-full mb-6 flex justify-center items-center" style="font-size:3rem;">
            User Management
        </h2>
        <div class="w-full flex justify-start mb-4">
            <a href="{{ route('admin.users.create') }}"
               class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 font-semibold text-base transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-800 ml-[10px]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Create New User
            </a>
        </div>
        <div class="overflow-x-auto w-full flex justify-center">
            <table class="min-w-[700px] max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg border-2 border-blue-400 dark:border-blue-700 divide-y divide-blue-200 dark:divide-blue-800">
                <thead class="bg-blue-200 dark:bg-blue-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-bold text-blue-900 dark:text-blue-100 uppercase tracking-wider border-b-2 border-blue-400 dark:border-blue-700">Last Name</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-blue-900 dark:text-blue-100 uppercase tracking-wider border-b-2 border-blue-400 dark:border-blue-700">First Name</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-blue-900 dark:text-blue-100 uppercase tracking-wider border-b-2 border-blue-400 dark:border-blue-700">Username</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-blue-900 dark:text-blue-100 uppercase tracking-wider border-b-2 border-blue-400 dark:border-blue-700">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-blue-900 dark:text-blue-100 uppercase tracking-wider border-b-2 border-blue-400 dark:border-blue-700">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-blue-900 dark:text-blue-100 uppercase tracking-wider border-b-2 border-blue-400 dark:border-blue-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-blue-100 dark:divide-blue-900">
                    @foreach ($users as $user)
                    <tr class="hover:bg-blue-100 dark:hover:bg-blue-900 transition">
                        <td class="px-6 py-4 whitespace-nowrap font-medium">{{ $user->last_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap font-medium">{{ $user->first_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->username }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap capitalize">{{ $user->user_type }}</td>
                        <td class="px-6 py-4 whitespace-nowrap flex flex-col sm:flex-row gap-2">
                            <a href="{{ route('admin.users.edit', $user->id) }}"
                               class="px-4 py-2 bg-yellow-400 text-gray-900 rounded hover:bg-yellow-500 font-semibold text-sm shadow transition">
                                Edit
                            </a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 font-semibold text-sm shadow transition"
                                        onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-8 flex justify-center w-full">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
