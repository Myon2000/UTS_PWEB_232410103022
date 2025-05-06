<nav class="bg-blue-600 text-white shadow-lg">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
      <div class="text-xl font-bold">
        <a href="{{ route('login', ['username' => request('username')]) }}">Toko Buku Online</a>
      </div>
      <ul class="flex space-x-6">
        <li><a class="hover:text-yellow-300" href="{{ route('dashboard', ['username' => request('username')]) }}">Dashboard</a></li>
        <li><a class="hover:text-yellow-300" href="{{ route('pengelolaan') }}?username={{ request('username') }}">Pengelolaan</a></li>
        <li><a class="hover:text-yellow-300" href="{{ route('login', ['username' => request('username')]) }}">Profile</a></li>
      </ul>
    </div>
</nav>