@extends('guest.guest-layout.master')

@section('page-title')
    Daftar Artikel
@endsection

@section('ar-nav-status')
    active
@endsection

@section('add-style')
    <style>
        .card-text-par {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
                    line-clamp: 2; 
            -webkit-box-orient: vertical;
        }
        .card-text-title {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1; /* number of lines to show */
                    line-clamp: 1; 
            -webkit-box-orient: vertical;
        }
    </style>
@endsection

@section('content')
    <section class="row text-center mt-3">
        <h1 class="display-text">Daftar Artikel</h1>
        <p class="h2-text">Temukan artikel yang Anda cari, di sini!</p>
    </section>

    <section class="row mt-4 mb-2">
        @foreach ($artikel as $item)
        <a href="{{ route('article.detail',$item->ar_slug) }}" class="text-decoration-none" style="color: black">
            <div class="card card-animate mb-3">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ asset('asset-article/'. $item->gambar) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ms-2 me-3">
                            <h3 class="card-title h2-text fw-bold">{{ $item->judul }}</h3>
                            <p class="card-text label-text">{{ $item->ringkasan }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </section>

    <section class="mt-2 mb-4" style="background-color: white">
        <div class="row">
            {{ $artikel->links() }}
        </div>
    </section>
@endsection