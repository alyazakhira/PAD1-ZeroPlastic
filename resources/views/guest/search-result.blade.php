@extends('guest.guest-layout.master')

@section('page-title')
    Hasil Pencarian
@endsection

@section('content')
    {{-- Article --}}
    @if(count($article))
        <section>
            <h1 class="display-text fw-bold mb-4">Artikel</h1>
            <div class="alert alert-success">
                Artikel dengan judul <strong>{{$key}}</strong> ditemukan!
            </div>
        </section>
        
        <div class="card border-0">

            <section class="scrollable-h">
                <table class="table table-hover text-center">
                    <thead class="table-success">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Ringkasan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($article as $row)
                        <tr>
                            <td>{{ $no_article++ }}</td>
                            <td>{{ $row->judul }}</td>
                            <td>{{ $row->ringkasan }}</td>
                            <td>
                                <a type="button" class="btn btn-outline-success" href="{{ route('article.detail', $row->ar_slug) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M5.795 12.456A.5.5 0 0 1 5.5 12V4a.5.5 0 0 1 .832-.374l4.5 4a.5.5 0 0 1 0 .748l-4.5 4a.5.5 0 0 1-.537.082z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    @else
        <div class="alert alert-warning">
            Artikel dengan judul <strong>{{$key}}</strong> tidak ditemukan.
        </div>
    @endif
    {{-- End of article --}}

    {{-- Divider --}}
    {{-- <center><hr class="mb-3 mt-3 border-3"></center> --}}
    {{-- End of divider --}}

    {{-- Product --}}
    @if(count($product))
        <h1 class="display-text fw-bold mb-4">Produk</h1>
        <div class="alert alert-success">
            Produk dengan nama <strong>{{$key}}</strong> ditemukan!
        </div>
        <div class="card border-0">
            <div class="scrollable-h">
                <table class="table table-hover text-center">
                    <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Ringkasan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($product as $baris)
                        <tr>
                            <td>{{ $no_product++ }}</th>
                            <td>{{ $baris->nama }}</td>
                            <td>{{ $baris->ringkasan }}</td>
                            <td>
                                <a type="button" class="btn btn-outline-success" href="{{ route('product.detail', $baris->prod_slug) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M5.795 12.456A.5.5 0 0 1 5.5 12V4a.5.5 0 0 1 .832-.374l4.5 4a.5.5 0 0 1 0 .748l-4.5 4a.5.5 0 0 1-.537.082z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            Produk dengan nama <strong>{{$key}}</strong> tidak ditemukan.
        </div>
    @endif
    {{-- End of product --}}

@endsection