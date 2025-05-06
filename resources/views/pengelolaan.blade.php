@extends('layouts.app')
@section('title', 'Pengelolaan Buku')
@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-gray-800 text-center mb-6">
            Pengelolaan Buku!
        </h1>
    </div>
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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

    {{-- Button tidak ada gunanya wkwkwk --}}
    <div class="flex justify-center space-x-4 mb-8 mt-3">
        <a class="px-5 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600 transition">
            Edit
        </a>
        <a class="px-5 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600 transition">
            Hapus
        </a>
    </div>
</div>
@endsection