@extends('admin.admin-layout.master')

@section('page-title')
    Ubah Akun Member
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
        <h1 class="display-text fw-bold mb-2">Ubah Akun Member</h1>
        <p class="h2-text mt-2">Hanya tambah akun member yang telah menyetujui saja!</h2>
    </section>

    <!-- Form -->
    <section class="mt-2 mb-3">
        <form action="{{ route('member.update', $member->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ $member->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $member->email }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ $member->password }}">
            </div>
            
            @if ( $member->isContentCreator )
                <div class="mb-3">
                    <label for="isContentCreator" class="form-check-label fw-semibold">Content Creator</label>
                    <input type="checkbox" class="form-check-input" id="isContentCreator" name="isContentCreator" value="1" checked>
                </div>
            @else
                <div class="mb-3">
                    <label for="isContentCreator" class="form-check-label fw-semibold">Content Creator</label>
                    <input type="checkbox" class="form-check-input" id="isContentCreator" name="isContentCreator" value="1">
                </div>
            @endif

            @if ( $member->isBSAdmin )
                <div class="mb-3">
                    <label for="isBSAdmin" class="form-check-label fw-semibold">Admin Bank Sampah</label>
                    <input type="checkbox" class="form-check-input" id="isBSAdmin" name="isBSAdmin" value="1" checked>
                </div>
            @else
                <div class="mb-3">
                    <label for="isBSAdmin" class="form-check-label fw-semibold">Admin Bank Sampah</label>
                    <input type="checkbox" class="form-check-input" id="isBSAdmin" name="isBSAdmin" value="1">
                </div>
            @endif


            <div class="row mt-5">
                <div class="d-grid">
                    <button class="btn btn-success btn-lg" type="submit">Kirim</button>
                </div>
            </div>
        </form>
    </section>
@endsection
