<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subs = Subscriber::orderBy('id')->paginate(5);
        $no = 5 * ($subs->currentPage()-1);
        return view('admin.subscriber.index',compact('subs','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscriber.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subs = new Subscriber;
        $subs->email = $request->email;
        $subs->edisi_terakhir = $request->bulan." ".$request->tahun;
        $subs->save();
        return redirect('/subscriber/index')->with('pesan','Email pelanggan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subs = Subscriber::find($id);
        $tahun = explode(' ', trim($subs->edisi_terakhir))[1];
        $bulan = explode(' ', trim($subs->edisi_terakhir))[0];
        return view('admin.subscriber.edit',compact('subs','tahun','bulan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update($id, Subscriber $subscriber)
    {
        $subs = Subscriber::find($id);
        $subs->email = $request->email;
        $subs->edisi_terakhir = $request->bulan." ".$request->tahun;
        $subs->save();
        return redirect('/subscriber/index')->with('pesan','Email pelanggan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subs = Subscriber::find($id);
        $subs->delete();
        return redirect('/subscriber/index')->with('pesan','Email pelanggan berhasil dihapus');
    }
}
