@extends('admin.admin-layout.master')

@section('page-title')
    Ubah Artikel
@endsection

@section('status-icon-article')
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
        <h1 class="display-text fw-bold mb-2">Ubah Artikel</h1>
        <p class="h2-text mt-2">Jangan lupa untuk mengecek lagi sebelum kirim!</h2>
    </section>

    <!-- Form -->
    <section class="mt-2 mb-3">
        <form action="{{ route('article.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label fw-semibold">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel" value="{{ $artikel->judul }}">
            </div>
            <div class="mb-3">
                <label for="ringkasan" class="form-label fw-semibold">Ringkasan</label>
                <input type="text" class="form-control" id="ringkasan" name="ringkasan" placeholder="Ringkasan Isi" value="{{ $artikel->ringkasan }}">
            </div>
            <div class="mb-3">
                <label for="artikel" class="form-label fw-semibold">Artikel</label>
                <input id="artikel" name="artikel" type="hidden" name="content" value="{{ $artikel->artikel }}">
                <trix-editor input="artikel"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label fw-semibold">Tanggal</label>
                <input type="date" class="form-control" id="diunggah_pada" name="diunggah_pada" value="{{ $artikel->diunggah_pada }}">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label fw-semibold">Gambar</label>
                <div class="file-upload" >
                    <div class="image-upload-wrap">
                        <input class="file-upload-input form-control" type='file' name="gambar" id="gambar" onchange="readURL(this);" accept="image/*" />
                        <div class="drag-text">
                            <h3><i class="bi bi-plus-square-dotted"></i></h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="{{ asset('asset-article/'. $artikel->gambar) }}" alt="your image" />
                        <div class="d-grid">
                            <button type="button" onclick="removeUpload()" class="btn btn-danger mt-3">Hapus Gambar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="d-grid">
                    <button class="btn btn-success btn-lg" type="submit">Kirim</button>
                </div>
            </div>
        </form>
    </section>
    
@endsection

@section('add-script')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
            }

        $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>
@endsection