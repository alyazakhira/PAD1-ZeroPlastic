<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Product;
use App\Models\CarouselHeader;

class GuestController extends Controller
{
    public function index(){
        $header1 = CarouselHeader::find(1);
        $header2 = CarouselHeader::find(2);
        $header3 = CarouselHeader::find(3);
        $artikelLg = DB::table('articles')->skip(Article::count()-3)->take(3)->get();
        $artikelLgN = DB::table('articles')->skip(Article::count()-6)->take(3)->get();
        $artikelSm = DB::table('articles')->skip(Article::count()-1)->take(1)->get();
        $artikelSmN = DB::table('articles')->skip(Article::count()-6)->take(5)->get();
        return view('guest.landing-page',compact('artikelLg','artikelLgN','artikelSm','artikelSmN','header1','header2','header3'));
    }

    public function listArticle(){
        $artikel = Article::orderBy('id') -> paginate(6);
        return view('guest.article.list',compact('artikel'));
    }

    public function listProduct(){
        $produk = Product::orderBy('id') -> paginate(6);
        return view('guest.product.list',compact('produk'));
    }

    public function detailArticle($slug){
        $artikel = Article::where('ar_slug',$slug)->first();
        return view('guest.article.detail',compact('artikel'));
    }

    public function detailProduct($slug){
        $produk = Product::where('prod_slug',$slug)->first();
        return view('guest.product.detail',compact('produk'));
    }

    public function search(Request $request){
        $key = $request->keyword;
        $article = Article::where('judul','like',"%".$key."%")
        ->orwhere('ringkasan','like',"%".$key."%")->get();

        $product = Product::where('nama','like',"%".$key."%")
        ->orwhere('ringkasan','like',"%".$key."%")->get();
        $no_article = 0;
        $no_product = 0;
        
        return view('guest.search-result', compact('article', 'product', 'no_article', 'no_product', 'key'));
    }
}
