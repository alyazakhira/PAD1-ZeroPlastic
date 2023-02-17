<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\BankSampah;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function login(){
        return view('member.login');
    }

    public function index(){
        $artikel = Article::orderBy('id','desc')->take(1)->get();
        $bs = BankSampah::orderBy('id','desc')->take(1)->get();
        return view('member.dashboard',compact('artikel','bs'));
    }
    
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/member-dashboard');
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

    public function register(Request $request){
        $member = new User;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->isBSAdmin = false;
        $member->isContentCreator = false;
        $member->isWebAdmin= false;
        $member->save();
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/member-dashboard');
        }
    }

    // public function search(Request $request){
    //     $key = $request->keyword;
    //     $article = Article::where('judul','like',"%".$key."%")
    //     ->orwhere('ringkasan','like',"%".$key."%")->get();

    //     $product = Product::where('nama','like',"%".$key."%")
    //     ->orwhere('ringkasan','like',"%".$key."%")->get();
    //     $no_article = 0;
    //     $no_product = 0;
        
    //     return view('member.search-result', compact('article', 'product', 'no_article', 'no_product', 'key'));
    // }

    public function contentCreator(){
        return view('member.article.tnc');
    }

    public function ccAgree(Request $request){
        if ($request->agree) {
            $member = User::find($request->id);
            $member->isContentCreator = true;
            $member->save();
            return redirect('/member-dashboard');
        } else {
            return redirect('/member-dashboard');
        }
    }

    public function adminBankSampah($id){
        $member = User::find($id);
        $member->isBSAdmin = true;
        $member->save();
        return view('member.bank-sampah.create');
    }
}
