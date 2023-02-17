<?php

namespace App\Http\Controllers;

use App\Models\BankSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MBankSampahController extends Controller
{
    public function index($id)
    {
        $bs = DB::table('bank_sampahs')->where('id_pengelola', $id)->get();
        return view('member.bank-sampah.index',compact('bs'));
    }

    public function create()
    {
        return view('member.bank-sampah.create');
    }

    public function store(Request $request)
    {
        $bank = new BankSampah;
        $bank->nama = $request->nama;
        $bank->alamat = $request->alamat;
        $bank->id_pengelola = $request->id_pengelola;
        $bank->save();
        return redirect(route('m-bank.index', $request->id_pengelola))->with('pesan','Bank Sampah berhasil ditambahkan');
    }

    public function show($slug)
    {
        //
    }

    public function edit($id)
    {
        $bank = BankSampah::find($id);
        $pengelola = DB::table('users')->where('isBSAdmin', true)->get();
        return view('member.bank-sampah.edit',compact('bank','pengelola'));
    }

    public function update(Request $request, $id)
    {
        $bank = BankSampah::find($id);
        $bank->nama = $request->nama;
        $bank->alamat = $request->alamat;
        $bank->id_pengelola = $request->id_pengelola;
        $bank->save();
        return redirect(route('m-bank.index', $request->id_pengelola))->with('pesan','Bank Sampah berhasil diubah');
    }

    public function destroy($id)
    {
        $bank = BankSampah::find($id);
        $bank->delete();
        return redirect(route('m-bank.index', $id))->with('pesan','Bank Sampah berhasil dihapus');
    }
}
