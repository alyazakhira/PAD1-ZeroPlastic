<?php

namespace App\Http\Controllers;

use App\Models\BankSampah;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBankSampahRequest;
use App\Http\Requests\UpdateBankSampahRequest;

class BankSampahController extends Controller
{

    public function index()
    {
        $bank = BankSampah::orderBy('id')->paginate(5);
        $no = 5 * ($bank->currentPage()-1);
        return view('admin.bank-sampah.index',compact('bank','no'));
    }

    public function create()
    {
        $pengelola = DB::table('users')->where('isBSAdmin', true)->get();
        return view('admin.bank-sampah.create',compact('pengelola'));
    }

    public function store(StoreBankSampahRequest $request)
    {
        $bank = new BankSampah;
        $bank->nama = $request->nama;
        $bank->alamat = $request->alamat;
        $bank->id_pengelola = $request->id_pengelola;
        $bank->save();
        return redirect('/bank-sampah/index')->with('pesan','Bank Sampah berhasil ditambahkan');
    }

    public function show($slug)
    {
        //
    }

    public function edit($id)
    {
        $bank = BankSampah::find($id);
        $pengelola = DB::table('users')->where('isBSAdmin', true)->get();
        return view('admin.bank-sampah.edit',compact('bank','pengelola'));
    }

    public function update(UpdateBankSampahRequest $request, $id)
    {
        $bank = BankSampah::find($id);
        $bank->nama = $request->nama;
        $bank->alamat = $request->alamat;
        $bank->id_pengelola = $request->id_pengelola;
        $bank->save();
        return redirect('/bank-sampah/index')->with('pesan','Bank Sampah berhasil diubah');
    }

    public function destroy($id)
    {
        $bank = BankSampah::find($id);
        $bank->delete();
        return redirect('/bank-sampah/index')->with('pesan','Bank Sampah berhasil dihapus');
    }
}
