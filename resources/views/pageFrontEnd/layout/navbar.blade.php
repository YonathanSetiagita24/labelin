<!-- START NAVBAR -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span class="logo-light-mode">
                <img src="{{ url('img/logo_Black.png') }}"  alt="" style="width:160px">
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i data-feather="menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang Labelin.co</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layanan">Layanan & Teknologi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#why">Why Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
                {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('scan') }}">Scan Produk</a>
                    </li> --}}
            </ul>

            <ul class="list-inline menu-social mb-0 ps-lg-4 ms-2">
                <li class="list-inline-item"><a href="{{ route('web_login') }}" class="btn btn-outline-primary btn-navbar">Login</a></li>
            </ul>
        </div>
        <!--end collapse-->
    </div>
    <!--end container-->
</nav>
<!-- END NAVBAR -->
