@extends('admin.admin-layout.master')

@section('page-title')
    Tambah Email Pelanggan
@endsection

@section('status-icon-email')
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
        <h1 class="display-text fw-bold mb-2">Tambah Email</h1>
        <p class="h2-text mt-2">Hanya tambah email pelanggan yang telah menyetujui saja!</h2>
    </section>

    <!-- Form -->
    <section class="mt-2 mb-3">
        <form action="{{ route('subscriber.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="bulan" class="form-label fw-semibold">Pilih Bulan</label>
                <select id="bulan" class="form-select" name="bulan">
                    <option value="">Pilih Bulan</option>
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label fw-semibold">Tulis Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun" placeholder="0000">
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