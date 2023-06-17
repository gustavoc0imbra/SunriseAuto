<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sunrise Auto</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logoSunrise.png')  }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css')  }}" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('site.home') }}">Sunrise Auto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('site.home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">All products</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Most Wanted</a></li>
                        <li><a class="dropdown-item" href="#!">Just Arrived</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-dark position-absolute top-2 end-5 nav-item" style="margin-right: 8%;" href="{{ route('site.register') }}">
                        <i class="bi bi-person-plus-fill"></i>
                        Create Account
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-dark position-absolute top-2 end-0 me-0 nav-item" href="{{ route('site.login') }}">
                        <i class="bi bi-box-arrow-in-right"></i>
                        &nbsp;
                        Login
                    </a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="btn btn-outline-dark me-5" href="{{ route('site.cart') }}">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">1</span>
                </a>
            </form>

        </div>
    </div>
</nav>
    @yield('content')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js')}}"></script>
</body>
</html>
