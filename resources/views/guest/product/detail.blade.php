@extends('guest.guest-layout.master')

@section('page-title')
    {{ $produk->nama }}
@endsection

@section('prod-nav-status')
    active
@endsection

@section('content')
    <section class="row text-center mt-3 mx-5 mb-4">
        <h1 class="display-text">{{ $produk->nama }}</h1>
        <p class="h2-text">Diunggah pada: {{ $produk->diunggah_pada }}</p>
    </section>
    <section class="row mx-5 mb-5">
        <img src="{{ asset('asset-product/'. $produk->gambar) }}" class="img-fluid mx-auto">
        <p class="par-text mt-3">{!! $produk->deskripsi !!}</p>
    </section>
@endsection