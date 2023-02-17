@extends('member.member-layout.master')

@section('page-title')
    Content Creator TnC
@endsection

@section('content')
    <section class="mt-4 mb-4 text-center">
        <h1 class="display-text">Syarat dan Ketentuan</h1>
        <hr>
    </section>
    <section class="mt-2">
        <ol>
            <li>Tidak menulis hal yang menyinggung SARA, pornografi, dan hal-hal sensitif lainnya.</li>
            <li>Tidak menulis hal diluar topik gerakan Zero Plastic</li>
            <li>Tidak menulis hal yang bersifat menghina pihak maupun golongan tertentu.</li>
            <li>Mampu menulis dengan bahasa yang baik dan sopan serta sesuai ketentuan PUEBI.</li>
        </ol>
    </section>
    <section class="mt-2">
        <form action="{{ route('member.cc.a') }}" method="POST">
            @csrf
            <label for="agree" class="form-check-label">
                <input type="checkbox" class="form-check-input" id="agree" name="agree" value="1">
                Saya menyetujui syarat dan ketentuan di atas dan bersedia menanggung konsekuensi apabila melanggarnya.
            </label>
            <input class="visually-hidden" value="{{ auth()->user()->id }}" name="id">
            <div class="row mt-5">
                <div class="d-grid">
                    <button class="btn btn-success btn-lg" type="submit">Kirim</button>
                </div>
            </div>
        </form>
    </section>
@endsection