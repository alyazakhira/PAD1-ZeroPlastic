@extends('guest.guest-layout.master')

@section('page-title')
    {{ $artikel->judul }}
@endsection

@section('ar-nav-status')
    active
@endsection

@section('content')
    <section class="row text-center mt-3 mx-5 mb-3">
        <h1 class="display-text">{{ $artikel->judul }}</h1>
        <p class="h2-text">Diunggah pada: {{ $artikel->diunggah_pada }}</p>
        <p class="h2-text">Ditulis oleh: {{ $artikel->user->name }}</p>
    </section>
    <section class="row mx-5 mb-5">
        <img src="{{ asset('asset-article/'. $artikel->gambar) }}" class="img-fluid mx-auto">
        <p class="par-text mt-3">{!! $artikel->artikel !!}</p>
    </section>
@endsection