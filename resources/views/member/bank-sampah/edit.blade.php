@extends('member.member-layout.master')

@section('page-title')
    Ubah Bank Sampah
@endsection

@section('content')
    @if (count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif

    <!-- Content Header -->
    <section class="mt-3 mb-4">
        <h1 class="display-text fw-bold mb-2">Ubah Bank Sampah</h1>
        <p class="h2-text mt-2">Jangan lupa cek kembali data yang telah dimasukkan!</h2>
    </section>

    <!-- Form -->
    <section class="mt-2 mb-3">
        <form action="{{ route('m-bank.update', $bank->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $bank->nama }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ $bank->alamat }}">
            </div>
            <input class="visually-hidden" name="id_pengelola" value="{{ auth()->user()->id }}">
            <div class="row mt-5">
                <div class="d-grid">
                    <button class="btn btn-success btn-lg" type="submit">Kirim</button>
                </div>
            </div>
        </form>
    </section>
@endsection
