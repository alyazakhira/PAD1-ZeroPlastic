@extends('admin.admin-layout.master')

@section('page-title')
    Tambah Bank Sampah
@endsection

@section('status-icon-bank')
    active
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
        <h1 class="display-text fw-bold mb-2">Tambah Bank Sampah</h1>
        <p class="h2-text mt-2">Hanya tambah bank sampah sesuai permintaan member!</h2>
    </section>

    <!-- Form -->
    <section class="mt-2 mb-3">
        <form action="{{ route('bank-sampah.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="id_pengelola" class="form-label fw-semibold">Pengelola</label>
                <select name="id_pengelola" id="id_pengelola"  class="form-control">
                    <option value="" selected>Pilih Member</option>
                    @foreach ($pengelola as $option)
                        <option value="{{ $option->id }}">{{ $option->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row mt-5">
                <div class="d-grid">
                    <button class="btn btn-success btn-lg" type="submit">Kirim</button>
                </div>
            </div>
        </form>
    </section>
@endsection
