@extends('admin.admin-layout.master')

@section('page-title')
    Pratinjau Produk
@endsection

@section('status-icon-prod')
    active
@endsection

@section('content')
    <div class="mx-5">
        <img src="{{ asset('asset-product/'. $produk->gambar) }}" class="img-fluid mx-auto">
        <h1 class="h1-text text-center fw-bold mt-2 mb-3">{{ $produk->nama }}</h1>
        <p class="mt-4"><strong>Diunggah pada:</strong> {{ $produk->diunggah_pada }}</p>
        <div>{!! $produk->deskripsi !!}</div>
    </div>
@endsection