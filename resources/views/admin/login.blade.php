<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ZP | Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     
        <style>
            .bg1{
                background-image: url("asset-img/bg1.jpg");
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

            .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #007F6D;
            --bs-btn-border-color: #007F6D;
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
        <div class="container vh-100 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-5 py-5 justify-content-end">

                <div class="col-sm-8 col-lg-6">
                    <span class="d-block mx-lg-auto" width="700" height="500">
                </div>

                <div class="col-md-10 mx-auto col-lg-6">
                    <form class="p-4 p-md-5" action="/login" method="POST">
                        @csrf
                        <p class="display-6 fw-bold text-center mb-4">Login</p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        {{-- <div class="checkbox mb-3">
                            <label>
                            <input type="checkbox" value="remember-me" id="cb-remember" checked> Remember me
                            </label>
                        </div> --}}
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                </div>

            </div>
        </div>
    </main>
    </body>
</html>