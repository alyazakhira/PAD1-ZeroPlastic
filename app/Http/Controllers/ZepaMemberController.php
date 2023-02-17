<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreZepaMemberRequest;
use App\Http\Requests\UpdateZepaMemberRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ZepaMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = DB::table('users')->where('isWebAdmin', false)->paginate(5);
        $no = 5 * ($member->currentPage()-1);
        return view('admin.member.index',compact('member','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreZepaMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new User;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->isBSAdmin = $request->isBSAdmin;
        $member->isContentCreator = $request->isContentCreator;
        $member->isWebAdmin= false;
        $member->save();
        return redirect('/member/index')->with('pesan','Akun member berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ZepaMember  $zepaMember
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ZepaMember  $zepaMember
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = User::find($id);
        return view('admin.member.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateZepaMemberRequest  $request
     * @param  \App\Models\ZepaMember  $zepaMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = User::find($id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->isBSAdmin = $request->isBSAdmin;
        $member->isContentCreator = $request->isContentCreator;
        $member->isWebAdmin= false;
        $member->save();
        return redirect('/member/index')->with('pesan','Akun member berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ZepaMember  $zepaMember
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = User::find($id);
        $member->delete();
        return redirect('/member/index')->with('pesan','Email pelanggan berhasil dihapus');
    }
}
