<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ZP | Daftar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href={{ asset('asset-style/font.css') }}>
        <style>
            .bg1{
                background-image: url("asset-img/bg2.png");
                background-size: cover;
                width: 100%;
                height: 100%;
                background-position: center;
            }

            .form-control:focus {
                color: #212529;
                background-color: #fff;
                border-color: #007F6D;
                outline: 0;
                box-shadow: 0 0 0 0.25rem #B0E4DD;
            }

            .btn-regis {
            --bs-btn-color: #fff;
            --bs-btn-bg: #115F76;
            --bs-btn-border-color: #115F76;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #006557;
            --bs-btn-hover-border-color: #006557;
            --bs-btn-focus-shadow-rgb: 49, 132, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #004C41;
            --bs-btn-active-border-color: #004C41;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #E6F6F4;
            --bs-btn-disabled-border-color: #E6F6F4;
            }

            #cb-remember{
                accent-color: #007F6D;
            }
        </style>
    </head>
    <body>
    <main class="bg1">
        <div class="container-fluid vh-100 col-xxl-8 px-4 py-3">
            <div class="row align-items-center g-5 py-5 justify-content-end">

                <div class="col-sm-8 col-lg-6">
                    <span class="d-block mx-lg-auto" width="700" height="500">
                </div>

                <div class="col-md-10 mx-auto col-lg-6">
                    <form class="p-4 p-md-5" action="/member-register" method="POST">
                        @csrf
                        <p class="display-6 fw-semibold text-center mb-4">Daftar</p>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ $email }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata sandi">
                        </div>
                        <button class="w-100 btn btn-regis mt-5" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    </body>
</html>