<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $produk = Product::orderBy('id')->paginate(5);
        $no = 5 * ($produk->currentPage()-1);
        return view('admin.product.index',compact('produk','no'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(StoreProductRequest $request){
        $produk = new Product;
        $produk->nama = $request->nama;
        $produk->prod_slug = Str::slug($request->nama, '-').'-'.$produk->id;
        $produk->ringkasan = $request->ringkasan;
        $produk->deskripsi = $request->deskripsi;
        $produk->uploaded_at = $request->uploaded_at;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1200,600,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-product/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $produk->gambar = $namaFile;
        $produk->save();
        return redirect('/product/index')->with('pesan','Produk berhasil ditambahkan');
    }

    public function show($slug){
        $produk = Product::where('prod_slug',$slug)->first();
        return view('admin.product.show',compact('produk'));
    }

    public function edit($id){
        $produk = Product::find($id);
        return view('admin.product.edit',compact('produk'));
    }

    public function update(UpdateProductRequest $request, $id){
        $produk = Product::find($id);
        $produk->nama = $request->nama;
        $produk->prod_slug = Str::slug($request->nama, '-').'-'.$id;
        $produk->ringkasan = $request->ringkasan;
        $produk->deskripsi = $request->deskripsi;
        $produk->uploaded_at = $request->uploaded_at;

        $foto = $request->gambar;
        $namaFile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(1200,600,function ($constraint) {
            $constraint->aspectRatio();
            })->save('asset-product/'.$namaFile);
        $foto->move('uploaded-img/', $namaFile);

        $produk->gambar = $namaFile;
        $produk->save();
        return redirect('/product/index')->with('pesan','Data Produk berhasil diubah');
    }

    public function destroy($id){
        $produk = Product::find($id);
        $produk->delete();
        return redirect('/product/index')->with('pesan','Produk berhasil dihapus');
    }
}
