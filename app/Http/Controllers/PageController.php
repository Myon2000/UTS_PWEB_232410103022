<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getBooks(){
        return [
            ['judul' => 'Laravel untuk Pemula', 'pengarang' => 'Andi Setiawan', 'stok' => 12],
            ['judul' => 'Pemrograman Web Modern', 'pengarang' => 'Siti Aminah', 'stok' => 8],
            ['judul' => 'Belajar PHP 8', 'pengarang' => 'Budi Santoso', 'stok' => 5],
        ];
    }

    public function Login (){
        return view('login');
    }

    public function doLogin(Request $request){
        $username = $request -> input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request){
        $username = $request->query('username');
        $books = $this -> getBooks();
        return view('dashboard', compact('username', 'books'));
    }

    public function pengelolaan(Request $request){
        $books = $this -> getBooks();
        return view ('pengelolaan', compact ('books'));
    }

    public function profile (Request $request) {
        $username = $request -> query('username');
        return view ('profile', compact('username'));
    }
}