<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Str;
use Image;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $artikel = Article::orderBy('id')->paginate(5);
        $no = 5 * ($artikel->currentPage()-1);
        return view('admin.article.index',compact('artikel','no'));
    }

    public function create(){
        return view('admin.article.create');
    }

    public function store(StoreArticleRequest $request){
        $artikel = new Article;
        $artikel->judul = $request->judul;
        $artikel->ar_slug = Str::slug($request->judul, '-').'-'.$artikel->id;
        $artikel->ringkasan = $request->ringkasan;
        $artikel->artikel = $request->artikel;
        $artikel->diunggah_pada = $request->diunggah_pada;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1024,300,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-article/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $artikel->gambar = $namaFile;
        $artikel->save();
        return redirect('/article/index')->with('pesan','Artikel berhasil ditambahkan');
    }

    public function show($slug){
        $artikel = Article::where('ar_slug',$slug)->first();
        return view('admin.article.show',compact('artikel'));
    }

    public function edit($id){
        $artikel = Article::find($id);
        return view('admin.article.edit',compact('artikel'));
    }

    public function update(UpdateArticleRequest $request, $id){
        $artikel = Article::find($id);
        $artikel->judul = $request->judul;
        $artikel->ar_slug = Str::slug($request->judul, '-').'-'.$id;
        $artikel->ringkasan = $request->ringkasan;
        $artikel->artikel = $request->artikel;
        $artikel->diunggah_pada = $request->diunggah_pada;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1200,600,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-article/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $artikel->gambar = $namaFile;
        $artikel->save();
        return redirect('/article/index')->with('pesan','Artikel berhasil diubah');
    }

    public function destroy($id){
        $artikel = Article::find($id);
        $artikel->delete();
        return redirect('/article/index')->with('pesan','Artikel berhasil dihapus');
    }
}
