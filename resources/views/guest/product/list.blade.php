@extends('guest.guest-layout.master')

@section('page-title')
    Daftar Produk
@endsection

@section('prod-nav-status')
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
        <h1 class="display-text">Daftar Produk</h1>
        <p class="h2-text">Meski fungsinya sama, produk berikut dapat membantu mengurangi sampah plastik loh!</p>
    </section>

    <section class="row mt-4 mb-2">
        @foreach ($produk as $item)
        <div class="col-6 col-md-4 mb-3">
            <a href="{{ route('product.detail',$item->prod_slug) }}" class="text-decoration-none" style="color: black">
                <div class="card prod-card-animate">
                    <img src="{{ asset('asset-product/'. $item->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title card-text-title h2-text">{{ $item->nama }}</h5>
                        <p class="card-text card-text-par label-text">{{ $item->ringkasan }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </section>

    <section class="mt-2 mb-4" style="background-color: white">
        <div class="row">
            {{ $produk->links() }}
        </div>
    </section>
@endsection

