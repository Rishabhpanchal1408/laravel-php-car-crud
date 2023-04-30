<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Library -->
    {{-- <script src="https://kit.fontawesome.com/dfff499c81.js" crossorigin="anonymous"></script> --}}
    <script src="https://kit.fontawesome.com/7a9e630d2b.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .carousel-inner {
            position: absolute;
            margin: 0;
            color: white;
        }

        .carousel-item,
        .carousel {
            height: 90vh;
        }

        .carousel-caption {
            position: absolute;
            color: whitesmoke;
            inset: 0;
            width: 100%;
            text-align: start;
            padding-top: 100px;
            padding-left: 50px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }

        .carousel-inner img {
            width: 100%;
            height: inherit;
            object-fit: cover;
        }

        .parallelogram {
            width: 85vh;
            height: 90vh;
            /* transform: translateX(100px) skew(15deg); */
            transform: matrix(1, 5, 1, 1, -100, 0);
            background: #ffffff;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border ">
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse gap-5" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll align-items-center"
                    style="--bs-scroll-height: 100px;">
                    <!-- Logo -->
                    <a href="/" class="navbar-brand">
                        <img height="50px"
                            src="https://webkinznewz.ganzworld.com/wp-content/uploads/2017/05/McQueen.png"
                            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif ; text-align: center">
                    </a>
                    <!-- Car -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CAR
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/car">View Cars</a></li>
                            <li><a class="dropdown-item" href="/car/create">Create Car</a></li>
                        </ul>
                    </li>

                    <!-- Brand -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            BRAND </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/brand">View Brands</a></li>
                            <li><a class="dropdown-item" href="/brand/create">Create Brand</a></li>
                        </ul>
                    </li>

                    <!-- Color-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            COLOR
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/color">View Colors</a></li>
                            <li><a class="dropdown-item" href="/color/create">Create Color</a></li>
                        </ul>
                    </li>

                    <!-- Engine -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ENGINE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/engine">View Engines</a></li>
                            <li><a class="dropdown-item" href="/engine/create">Create Engine</a></li>
                        </ul>
                    </li>

                    <!-- Type -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TYPE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/type">View Types</a></li>
                            <li><a class="dropdown-item" href="/type/create">Create Type</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- Login / Register -->
                <form class="d-flex flex-grow-1 align-self-center">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <ul class="navbar-nav me-auto my-2 ">
                    <li class="nav-item"><i class="fa-solid fa-user"></i> Login / Register</li>
                </ul>
            </div>
        </div>
    </nav>

    <x-flash-msg />
    @yield('data')

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
