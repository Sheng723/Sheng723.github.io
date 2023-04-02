<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/981dbea0ef.js" crossorigin="anonymous"></script>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    {{-- 'resources/css/app.css', 'resources/js/app.js',  --}}
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="/">Hello World</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ url('/blog') }}">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                    {{-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> --}}
                </div>
            </div>
        </nav>
        @if (!Request::is('show-blog'))
            <div class="p-5 text-center bg-light">
                <h1 class="mb-3">Welcome </h1>
                <h4 class="mb-3">to my website</h4>
                <a class="btn btn-primary" href="/show-blog" role="button">Show Blogs</a>
            </div>
        @endif
    </header>
    @yield('content')
    <footer class="text-center text-lg-start bg-light text-muted">
        <section class="container">
            <div class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <div>
                    <a href="fb.com" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="twitter.com" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="google.com" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="insta.com" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="linkedin.com" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="github.com" class="me-lg-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </section>
        <section>
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Position
                        </h6>
                        <p>
                            Web Developer
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Projects
                        </h6>
                        <p>
                            <a class="text-reset">Coming Soon</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> Malaysia</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="info@example.com">info@example.com</a>
                        </p>
                        <p><i class="fas fa-phone me-3"></i><a href="tel:+6012345678">+ 6012345678</a></p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-4 bg-secondary-subtle">
            © 2023 Copyright
        </div>
    </footer>
</body>

</html>
