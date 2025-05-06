@extends('layouts.app_guest')
@section('title', 'Login')
@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center">
  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Login Toko Buku Online</h2>
    <form action="{{ route('doLogin') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label for="username" class="block text-gray-700 font-medium mb-1">Username</label>
        <input id="username" type="text" name="username" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
        <input id="password" type="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <button type="submit" class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200">Masuk</button>
    </form>
  </div>
</div>
@endsection