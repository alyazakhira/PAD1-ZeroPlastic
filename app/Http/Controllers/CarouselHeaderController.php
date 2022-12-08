<?php

namespace App\Http\Controllers;

use App\Models\CarouselHeader;
use Illuminate\Http\Request;
use Image;

class CarouselHeaderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $header1 = CarouselHeader::find(1);
        $header2 = CarouselHeader::find(2);
        $header3 = CarouselHeader::find(3);
        return view('admin.carousel-header.index',compact('header1','header2','header3'));
    }

    public function update(Request $request){
        $header1 = CarouselHeader::find(1);
        $header2 = CarouselHeader::find(2);
        $header3 = CarouselHeader::find(3);
        $namaFile1 = $header1->gambar;
        $namaFile2 = $header2->gambar;
        $namaFile3 = $header3->gambar;
        $foto1 = $request->header1;
        $foto2 = $request->header2;
        $foto3 = $request->header3;

        if ($foto1 != null) {
            $namaFile1 = "1".time().'.'.$foto1->getClientOriginalExtension();
            Image::make($foto1)->resize(1200,600,function ($constraint) {
                $constraint->aspectRatio();
            })->save('asset-header/'.$namaFile1);
            $foto1->move('uploaded-img/', $namaFile1);
        }
        
        if ($foto2 != null) {
            $namaFile2 = "2".time().'.'.$foto2->getClientOriginalExtension();
            Image::make($foto2)->resize(1200,600,function ($constraint) {
                $constraint->aspectRatio();
            })->save('asset-header/'.$namaFile2);
            $foto2->move('uploaded-img/', $namaFile2);
        }

        if ($foto3 != null) {
            $namaFile3 = "3".time().'.'.$foto3->getClientOriginalExtension();
            Image::make($foto3)->resize(1200,600,function ($constraint) {
                $constraint->aspectRatio();
            })->save('asset-header/'.$namaFile3);
            $foto3->move('uploaded-img/', $namaFile3);
        }

        $header1->gambar = $namaFile1;
        $header2->gambar = $namaFile2;
        $header3->gambar = $namaFile3;
        $header1->save();
        $header2->save();
        $header3->save();
        return redirect('/header/index')->with('pesan','Gambar Carousel berhasil diperbarui');
    }
}
