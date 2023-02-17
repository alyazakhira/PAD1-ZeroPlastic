<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ZP | @yield('page-title')</title>
        <link rel="icon" href={{ asset('asset-img/logo-svg.svg') }}>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
        <link rel="stylesheet" href={{ asset('asset-style/font.css') }}>
        <link rel="stylesheet" href={{ asset('asset-style/member-style/member-style.css') }}>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top top-0">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <svg id="Layer_1" data-name="Layer 1" width="40" height="40" fill="currentColor" class="bi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 363.98 434.07"><path class="cls-1" d="M126.79,444.9s-8.77,44.47-.06,50,23.38,7.82,29.35,3.7,32.13-26.56,42.23-31.13,44.5-13.7,44.5-13.7l54.11-.85s17.89,2.77,28.43,1.87,18.82-7.32,18.82-7.32L356.56,440l17.12-2.43s18.65-.89,26.91-1.19a45.64,45.64,0,0,0,13.15-2.12l32.12-17.08s33.95-15.25,34.88-19.83-3.66-10.4-7.94-10.71-28.44,8.83-33,10.05-21.41,5.78-21.41,5.78,3.68-7.95,7.05-11,16.84-20.77,16.84-20.77,20.83-32.07,18.69-36.05-15-3.38-21.1,4.25-11.95,22.92-11.64,15.89,12-27.81,6.15-29-15.89,1.2-19,7.93-8.9,22.91-8.9,22.91L390.58,374s3.06-5.5,1.85-16.81.34-26.91-1.8-25.38-8.56.91-10.41,7.63-.33,19.87-1.56,24.15-14.08,19.25-14.08,19.25-11.93,5.48-16.21,6.4S335.82,395,335.82,395s-7.94-2.15-5.19-3.68,39.16-17.07,39.16-23.18S363.39,352,360,351s-10.7-1.54-19.57,1.2S316,362.89,311.71,365s-23.15,7.31-27,7S257,369.24,257,369.24s-30.88,0-34.55,1.18-21.11,9.76-26,14S168,412.91,168,412.91l-25.09,20.7Z" transform="translate(-119.88 -69.63)"/><path class="cls-1" d="M251.21,181.27s30.27,8.56,44.94,17.73,15.6,9.79,18.35,5.51,23.54-37.3,27.21-42.19,16.51-21.4,16.51-19.88-4.28,9.18-5.81,11.93-15.29,25.07-18,30.88-10.7,22.32-10.7,22.32-2.75,3.05-2.45,4.89,20.18,20.48,20.18,20.48,15.9,18.65,18.35,34.55,2.14,12.84,2.14,12.84,1.53,3.53,4.58.24,25.38-19.81,34.55-41.21,16.82-48,16.82-59.92,2.14-34.24-3.37-61.15-12.23-44.64-12.23-44.64-53.81,23.85-76.12,44.64S283.31,162.62,279.34,170l-4,7.34-3.05,7Z" transform="translate(-119.88 -69.63)"/><path class="cls-1" d="M337.12,341.48s12.54-3.06,12.84-6.42-5.19-43.72-30.88-74.3-33-36.38-33-36.38,38.82,42.5,44.94,79.8Z" transform="translate(-119.88 -69.63)"/><path class="cls-1" d="M245.17,193.35s-.91,34.39,1.38,48.61A159.17,159.17,0,0,0,253,267.64l9.63,19.49s12.84,15.14,15.59,17.43,12.3,9.4,12.3,9.4,13.61,6.88,15.45,7.57,12.61,3.67,11,3.89-25-4.35-32.56-9.17-11.69-8-11.69-8l-10.55-10.32s-12.38-17.66-13.3-20.41-6.42-21.32-6.42-21.32-1.56-24.54-1.56-28.67,1.79-22.7,2.25-25S245.17,193.35,245.17,193.35Z" transform="translate(-119.88 -69.63)"/></svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/member-dashboard">Dashboard</a>
                        </li>
                        @if (auth()->user()->isContentCreator)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('m-article.index',auth()->user()->id) }}">Artikel</a>
                            </li>
                        @endif
                        @if (auth()->user()->isBSAdmin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('m-bank.index',auth()->user()->id) }}">Bank Sampah</a>
                            </li>
                        @endif
                    </ul>
                    <div class="w-50">
                        <form class="input-group d-flex" role="search" action="{{route('admin.search')}}" method="POST">
                            @csrf
                            <input type="text" class="form-control" placeholder="Search" type="search" aria-label="search" aria-describedby="button-addon2" name="keyword">
                            <button class="btn btn-outline-member-zp" type="submit" id="button-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownUser3">
                            <form action="/member-logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main class="container">
            @yield('content')
        </main>

        @yield('add-script')
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>