@extends('admin.admin-layout.master')

@section('page-title')
    Daftar Artikel
@endsection

@section('status-icon-article')
    active
@endsection

@section('content')
    <section>
        @if (Session::has('pesan'))
            <div class="alert alert-success">{{ Session::get('pesan') }}</div>
        @endif
    </section>

    <!-- Content Header -->
    <section class="mt-3 mb-4">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <h1 class="display-text fw-bold mb-2">Daftar Artikel</h1>
                <p class="h2-text mt-2">Berikut ini adalah daftar artikel yang telah diunggah.</h2>
            </div>
            <div class="col-lg-3">
                <a href="/article/create" class="btn btn-success w-100 py-2 h2-text" type="button">+ Tambah</a>
            </div>
        </div>
    </section>

    <!-- Table -->
    <section class="mb-4">
        <div class="card border-0">
            <div class="scrollable-h">
                <table class="table table-hover text-center">
                    <thead class="table-success">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Ringkasan</th>
                            <th colspan="3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($artikel as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->judul }}</td>
                            <td>{{ $row->user->name }}</td>
                            <td>{{ $row->ringkasan }}</td>
                            <td>
                                <a type="button" class="btn btn-outline-success" href="{{ route('article.edit', $row->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <form class="mx-1" action="{{ route('article.destroy', $row->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Hapus Artikel?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a type="button" class="btn btn-outline-primary" href="{{ route('article.show', $row->ar_slug) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <!-- Pagination -->
    <section class="mb-4">
        <div class="row">
            {{ $artikel->links() }}
        </div>
    </section>

@endsection