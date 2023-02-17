<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function index(){
        $artikel = Article::orderBy('id','desc')->take(3)->get();
        $produk = Product::orderBy('id','desc')->take(3)->get();
        $jumlah_artikel = Article::count();
        $jumlah_produk = Product::count();
        $jumlah_member = DB::table('users')->where('isWebAdmin', false)->get()->count();
        return view('admin.dashboard',compact('artikel','produk','jumlah_artikel','jumlah_produk','jumlah_member'));
    }
    
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }
 
        return back()->withErrors([
            'email' => 'Data yang Anda masukkan tidak sesuai dengan data kami.',
        ])->onlyInput('email');
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function search(Request $request){
        $key = $request->keyword;
        $article = Article::where('judul','like',"%".$key."%")
        ->orwhere('ringkasan','like',"%".$key."%")->get();

        $product = Product::where('nama','like',"%".$key."%")
        ->orwhere('ringkasan','like',"%".$key."%")->get();
        $no_article = 0;
        $no_product = 0;
        
        return view('admin.search-result', compact('article', 'product', 'no_article', 'no_product', 'key'));
    }
}
