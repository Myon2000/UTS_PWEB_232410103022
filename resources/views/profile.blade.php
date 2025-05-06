@extends('layouts.app')
@section('title', 'Pengelolaan Buku')
@section('content')
<div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center">
    <div >
        <img class="mb-8 rounded-2xl shadow-lg w-full h-auto max-w-md hover:shadow-lg transition inline" alt="profile" src="{{ asset('assets/download (5).jpeg') }}"  />
    </div>
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md hover:shadow-lg transition"> 
        <div class="text-sm text-gray-500 ">Username : </div>
        <div class="my-2 text-2xl font-bold text-gray-800">{{$username}}</div>
        <div class="text-sm text-gray-500 ">Umur : </div>
        <div class="my-2 text-2xl font-bold text-gray-800">20</div>
        <div class="text-sm text-gray-500 ">Alamat : </div>
        <div class="my-2 text-2xl font-bold text-gray-800">Jerman</div>
    </div>

    <div class="flex justify-center space-x-4 mb-8 mt-3">
        <a href="{{ route('login') }}" class="px-5 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600 transition">
            Logout
        </a>
    </div>
</div>
@endsection

