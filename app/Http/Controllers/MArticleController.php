<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($id){
        $artikel = DB::table('articles')->where('id_penulis', $id)->get();
        return view('member.article.index',compact('artikel'));
    }

    public function create(){
        return view('member.article.create');
    }

    public function store(Request $request){
        $artikel = new Article;
        $artikel->judul = $request->judul;
        $artikel->ar_slug = Str::slug($request->judul, '-').'-'.$artikel->id;
        $artikel->ringkasan = $request->ringkasan;
        $artikel->artikel = $request->artikel;
        $artikel->diunggah_pada = $request->diunggah_pada;
        $artikel->id_penulis = $request->id_penulis;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1200,600,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-article/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $artikel->gambar = $namaFile;
        $artikel->save();
        return redirect(route('m-article.index', $request->id_penulis))->with('pesan','Artikel berhasil ditambahkan');
    }

    public function show($slug){
        $artikel = Article::where('ar_slug',$slug)->first();
        return view('member.article.show',compact('artikel'));
    }

    public function edit($id){
        $artikel = Article::find($id);
        return view('member.article.edit',compact('artikel'));
    }

    public function update(Request $request, $id){
        $artikel = Article::find($id);
        $artikel->judul = $request->judul;
        $artikel->ar_slug = Str::slug($request->judul, '-').'-'.$id;
        $artikel->ringkasan = $request->ringkasan;
        $artikel->artikel = $request->artikel;
        $artikel->diunggah_pada = $request->diunggah_pada;
        $artikel->id_penulis = $request->id_penulis;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1200,600,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-article/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $artikel->gambar = $namaFile;
        $artikel->save();
        return redirect(route('m-article.index', $request->id_penulis))->with('pesan','Artikel berhasil diubah');
    }

    public function destroy($id){
        $artikel = Article::find($id);
        $artikel->delete();
        return redirect(route('m-article.index', $id))->with('pesan','Artikel berhasil dihapus');
    }
}
