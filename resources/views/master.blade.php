<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>    
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="/" class="navbar-brand mx-auto mx-lg-0">Fakhri</a>

            <div class="d-flex align-items-center d-lg-none">
                <a class="custom-btn btn" href="#">
                    0838-0454-9773
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/blog/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/blog/portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/blog/contact">Contact</a>
                    </li>
                </ul>
                <div class="d-lg-flex align-items-center d-none ms-auto">
                    <a class="custom-btn btn" href="/blog/contact">
                        0838-0454-9773
                    </a>
                </div>
            </div>
        </div>
    </nav>
        <main>
            @yield('konten')
        </main>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    <script src="../assets/js/click-scroll.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/magnific-popup-options.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>