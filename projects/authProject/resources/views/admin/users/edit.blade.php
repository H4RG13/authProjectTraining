@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-lg mt-10 p-8 bg-white dark:bg-gray-800 rounded shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800 dark:text-gray-100">Edit User</h2>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label class="block mb-1 font-semibold text-gray-700 dark:text-gray-200">Last Name</label>
            <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700 dark:text-gray-200">First Name</label>
            <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700 dark:text-gray-200">Username</label>
            <input type="text" name="username" value="{{ old('username', $user->username) }}" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700 dark:text-gray-200">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700 dark:text-gray-200">Password <span class="text-xs text-gray-400">(leave blank to keep current)</span></label>
            <input type="password" name="password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600">
        </div>
        <div>
            <label class="block mb-1 font-semibold text-gray-700 dark:text-gray-200">Confirm Password</label>
            <input type="password" name="password_confirmation" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600">
        </div>
        <button type="submit" class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded transition">Update User</button>
    </form>
</div>
@endsection
