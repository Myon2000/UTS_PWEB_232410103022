@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-gray-800 text-center mb-6">
            Selamat Datang, Yang Mulia <span class="text-blue-600">{{ $username }}</span>!
        </h1>

    <div class="flex justify-center space-x-4 mb-8">
        <a href="{{ route('pengelolaan') }}?username={{ request('username') }}" 
            class="px-5 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600 transition">
            Pengelolaan Buku
        </a>
        <a href="{{ route('dashboard', ['username' => request('username')]) }}" 
            class="px-5 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
            Profil Saya
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <div class="text-sm font-medium text-gray-500">Total Buku</div>
            <div class="mt-2 text-3xl font-bold text-gray-800">{{ count($books ?? []) }}</div>
        </div>
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <div class="text-sm font-medium text-gray-500">Kategori</div>
            <div class="mt-2 text-3xl font-bold text-gray-800">3</div>
        </div>
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <div class="text-sm font-medium text-gray-500">Transaksi Hari Ini</div>
            <div class="mt-2 text-3xl font-bold text-gray-800">0</div>
        </div>
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <div class="text-sm font-medium text-gray-500">Pengunjung Aktif</div>
            <div class="mt-2 text-3xl font-bold text-gray-800">12</div>
        </div>
    </div>

    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Buku Favorit</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach(($books ?? []) as $book)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transform transition">
                <div class="p-4">
                    <h3 class="font-semibold text-lg text-gray-800 truncate">{{ $book['judul'] }}</h3>
                    <p class="text-gray-600 mt-1">Pengarang: {{ $book['pengarang'] }}</p>
                </div>
                <div class="px-4 py-2 bg-gray-100 text-gray-700 text-sm">
                    Stok: {{ $book['stok'] }}
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection