<!doctype html>
<html lang="en">

<!-- Mirrored from shreethemes.in/Pcstos/layouts/index-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Oct 2022 14:03:29 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $setting_web->nama_website }}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Msramdan" />
    <meta name="email" content="{{ $setting_web->email }}" />
    <meta name="version" content="1.0" />
    <link href="{{ asset('template/frontend/images/icon.png') }}" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/frontend/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('template/frontend/css/swiper.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('template/frontend/css/tobii.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('template/frontend/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/frontend/css/line.css') }}" rel="stylesheet">
    <!-- Custom  Css -->
    <link href="{{ asset('template/frontend/css/style.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('template/frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    {{-- navbar --}}
    <!-- START NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="logo-light-mode">
                    <img src="{{ url('img/logo_Black.png') }}" alt="" style="width:160px">
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                    <li class="list-inline-item"><a href="{{ route('web_login') }}"
                            class="btn btn-outline-primary btn-navbar">Login</a></li>
                </ul>
            </div>
            <!--end collapse-->
        </div>
        <!--end container-->
    </nav>
    <!-- END NAVBAR -->

    <!-- Start Hero -->
    <section class="swiper-slider-hero position-relative d-block vh-100" id="home">
        <div class="row">
            <div class="col bungkus">
                <p class="text-branding">
                    Lindungi Merek Bisnismu Dari Pemalsuan Produk
                </p>
                <p class="text-tag">
                    Mengatasi segala pelanggaran dan melindungi merek serta pelanggan dari bahaya produk palsu dan
                    imitasi.
                </p>
                <div class="d-grid gap-2 d-md-block">
                    <a href="#about" class="btn btn-dark" role="button" type="button">Pelajari lebih lanjut</a>
                    <a href="{{ route('partner.register') }}" class="btn btn-outline-primary" role="button"
                        type="button">Coba sekarang</a>
                </div>
                <img src="{{ url('img/arrow.png') }}" alt="arrow" class="arrow">
                <img src="{{ url('img/device.png') }}" alt="device" class="device">
                <img src="{{ url('img/authentic.png') }}" alt="authentic" class="authentic">
            </div>
            <div class="col">
                <img src="{{ url('img/Vector.png') }}" alt="vector" class="vector">
            </div>
        </div>
    </section>
    <!--end section-->
    <!-- Hero End -->

    <section class="section overflow-hidden active" id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">
                            Kategori Produk Yang Kami Lindungi</h4>
                        <p class="para-desc mx-auto text-muted mb-0">
                            Beberapa Kategori Produk Yang Kami Lindungi agar terjamin keasliannya.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card border-0 text-center shadow border-0 overflow-hidden rounded">
                        <div class="card-body">
                            <img src="{{ url('img/produk/makanan.png') }}" alt="makanan">
                            <h5 class="mb-1">Bahan Makanan</h5>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card border-0 text-center shadow border-0 overflow-hidden rounded">
                        <div class="card-body">
                            <img src="{{ url('img/produk/elektronik.png') }}" alt="elektronik">
                            <h5 class="mb-1">Elektronik</h5>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card border-0 text-center shadow border-0 overflow-hidden rounded">
                        <div class="card-body">
                            <img src="{{ url('img/produk/dokumen.png') }}" alt="dokumen">
                            <h5 class="mb-1">Dokumen</h5>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card border-0 text-center shadow border-0 overflow-hidden rounded">
                        <div class="card-body">
                            <img src="{{ url('img/produk/farmasi.png') }}" alt="farmasi">
                            <h5 class="mb-1">Farmasi</h5>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-center">

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card border-0 text-center shadow border-0 overflow-hidden rounded">
                        <div class="card-body">
                            <img src="{{ url('img/produk/kosmetik.png') }}" alt="kosmetik">
                            <h5 class="mb-1">Kosmetik Parfume</h5>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card border-0 text-center shadow border-0 overflow-hidden rounded">
                        <div class="card-body">
                            <img src="{{ url('img/produk/perhiasan.png') }}" alt="perhiasan">
                            <h5 class="mb-1">Perhiasan</h5>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card border-0 text-center shadow border-0 overflow-hidden rounded">
                        <div class="card-body">
                            <img src="{{ url('img/produk/fashion.png') }}" alt="fashion">
                            <h5 class="mb-1">Fashion</h5>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!---end row--->
        </div>
        <!--end container-->
    </section>

    <!-- FEATURES START -->
    <section class="section bg-light" id="about">
        <div class="container mt-100 mt-60">
            <div style="background: url('{{ asset('template/frontend/images/map.png') }}') center center;">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="position-relative me-lg-5">
                            <img src="{{ asset('img/image.png') }}" class="rounded img-fluid mx-auto d-block"
                                alt="">
                            <div class="play-icon">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                    class="play-btn lightbox">
                                    <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title">
                            <h4 class="title mb-3">Tentang Kami</h4>
                            <p class="text-muted" style="text-align: justify">{{ $setting_web->deskripsi }}</p>
                            <a href="#" class="title h6 text-dark">Visi Kami</a>
                            <p class="text-muted" style="text-align: justify">
                                Menjadi perusahaan pengembang kemasan dengan teknologi Internet Of Thing (IoT)
                                terpercaya di Indonesia dengan kemampuan bersaing secara universal dan memberi nilai
                                tambah kedapa seluruh pemilik bisnis atau business owner.</p>
                            <a href="#" class="title h6 text-dark">Misi Kami</a>
                            <ul class="list-unstyled text-muted" style="text-align: justify">
                                <li class="mb-1"><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Menyediakan produk
                                    yang berkualitas, aman dan menyeluruh.</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span>Memberikan solusi dan
                                    kepercayaan kepada business owner dan konsumen agar terhindar dari produk-produk
                                    palsu.</li>
                            </ul>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->

        <div class="container mt-5">
            <h1 class="h1 text-center">Support by Ecommerce</h1>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h3 class="mb-0 fw-semibold mt-2">
                            <img src="{{ url('img/perusahaan/shopee.png') }}" alt="shopee" height="40">
                        </h3>
                        <span class="counter-head text-muted">Shopee</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->

                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h3 class="mb-0 fw-semibold mt-2">
                            <img src="{{ url('img/perusahaan/lazada.png') }}" alt="lazada" height="40">
                        </h3>
                        <span class="counter-head text-muted">Lazada</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->

                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h3 class="mb-0 fw-semibold mt-2">
                            <img src="{{ url('img/perusahaan/tokopedia.png') }}" alt="tokopedia" height="50">
                        </h3>
                        <span class="counter-head text-muted">Tokopedia</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->

                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h3 class="mb-0 fw-semibold mt-2">
                            <img src="{{ url('img/perusahaan/tiktok.png') }}" alt="tiktok" height="60">
                        </h3>
                        <span class="counter-head text-muted">Tiktok Shop</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row mt-4">
                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h3 class="mb-0 fw-semibold mt-2">
                            <img src="{{ url('img/perusahaan/whatsapp.png') }}" alt="whatsapp" height="40">
                        </h3>
                        <span class="counter-head text-muted">whatsapp.com</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->

                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h3 class="mb-0 fw-semibold mt-2">
                            <img src="{{ url('img/perusahaan/linktree.png') }}" alt="linktree" height="40">
                        </h3>
                        <span class="counter-head text-muted">Linktr.ee</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->

                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h3 class="mb-0 fw-semibold mt-2">
                            <img src="{{ url('img/perusahaan/youtube.png') }}" alt="youtube" height="30">
                        </h3>
                        <span class="counter-head text-muted">Youtube.com</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->

                <div class="col-md-3 col-6">
                    <div class="counter-box position-relative text-center">
                        <h3 class="mb-0 fw-semibold mt-2">
                            <img src="{{ url('img/perusahaan/mailchimp.png') }}" alt="mailchimp" height="50">
                        </h3>
                        <span class="counter-head text-muted">Mailchimp.com</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->
            </div>
            {{-- end row  --}}
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start Blog -->
    <section class="section bg-light" id="layanan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="mb-3 h1"><strong>Layanan Kami</strong> <img src="{{ url('/img/mantap.png') }}"
                                alt="mantap"></h4>
                        <img src="{{ url('img/garis.png') }}" alt="garis" style="margin-top: -5%">
                        <p class="text-muted para-desc mb-0 mx-auto">Mengapa memilih layanan kami merupakan opsi
                            terbaik untuk bisnis anda ? <br> Kami memiliki support service yang menjadi nilai jual</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row text-center">
                <div class="col-lg col-md mt-2 pt-2">
                    <div class="card shadow-lg bg-body" style="height: 250px;">
                        <div class="card-body  p-0">
                            <div class="p-4">
                                <img src="{{ url('img/layanan/qr.png') }}" alt="qrcode">
                                <a href="#" class="h5 title text-dark d-block mb-0">Smart Label</a>
                                <p class="mt-2 mb-0">{{ $setting_web->nama_website }} Membantu dalam pembuatan label
                                    barcode dan nomor seri produk, yang digunakan untuk mengetahui keaslian produk
                                    berbasis Qrcode & RFID/NFC.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md mt-2 pt-2">
                    <div class="card shadow-lg bg-body" style="height: 250px;">
                        <div class="card-body  p-0">
                            <div class="p-4">
                                <img src="{{ url('img/layanan/smart.png') }}" alt="smart">
                                <a href="#" class="h5 title text-dark d-block mb-0">Smart Packaging</a>
                                <p class="mt-2 mb-0">Dengan teknologi Augmented Reality (AR), kami membantu pemasaran
                                    bisnismu secara kreatif dan menarik.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md mt-2 pt-2">
                    <div class="card shadow-lg bg-body" style="height: 250px;">
                        <div class="card-body  p-0">
                            <div class="p-4">
                                <img src="{{ url('img/layanan/tracking.png') }}" alt="tracking">
                                <a href="#" class="h5 title text-dark d-block mb-0">Distribution Tracking
                                    System</a>
                                <p class="mt-2 mb-0">Bersama {{ $setting_web->nama_website }} Dengan sistem pelacakan
                                    produk, kamu dapat mengetahui persebaran penjualan produkmu di setiap wilayah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Blog -->

    <!-- Start Why -->
    <section class="section bg-light" id="why">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Why Us</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Mengapa memilih layanan kami merupakan opsi
                            terbaik untuk bisnis anda ? <br> Kami memiliki support service yang menjadi nilai jual</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-6 col-md-6 mt-5">
                    <div class="card blog blog-primary shadow-lg bg-body text-center" style="height: 250px">
                        <div class="card-body content p-0">
                            <div class="p-4">
                                <img src="{{ url('/img/layanan/smart.png') }}" alt="smart">
                                <a href="#" class="h5 title text-dark d-block mb-0">Solusi</a>
                                <p class="text-muted mt-2 mb-0" style="text-align: justify">
                                    {{ $setting_web->nama_website }} merupakan solusi nyata dari permasalahan pemalsuan
                                    produk didalam bisnismu.</p>
                            </div>
                        </div>
                    </div>
                    {{-- end card --}}

                    <div class="card blog blog-primary shadow-lg bg-body mt-3 text-center" style="height: 250px">
                        <div class="card-body content p-0">
                            <div class="p-4">
                                <img src="{{ url('/img/layanan/qr.png') }}" alt="qr">
                                <a href="#" class="h5 title text-dark d-block mb-0">Perlindungan</a>
                                <p class="text-muted mt-2 mb-0" style="text-align: justify">Kami mampu mengatasi
                                    segala pelanggaran dan melindungi merek dari pemalsuan produk, sehingga pelanggan
                                    tidak perlu khawatir dalam membeli produkmu.</p>
                            </div>
                        </div>
                    </div>
                    {{-- end card --}}
                </div>

                <div class="col-lg-6 col-md-6 mt-5">
                    <div class="card blog blog-primary shadow-lg bg-body text-center" style="height: 250px">
                        <div class="card-body content p-0">
                            <div class="p-4">
                                <img src="{{ url('/img/layanan/smart.png') }}" alt="smart">
                                <a href="#" class="h5 title text-dark d-block mb-0">Kepercayaan</a>
                                <p class="text-muted mt-2">Bersama
                                    {{ $setting_web->nama_website }} kita bangun relasi yang baik dengan pelanggan,
                                    guna meningkatkan produktivitas bisnismu.</p>
                            </div>
                        </div>
                    </div>
                    {{-- end card --}}
                    <div class="card blog blog-primary shadow-lg bg-body mt-3 text-center" style="height: 250px">
                        <div class="card-body content p-0">
                            <div class="p-4">
                                <img src="{{ url('/img/layanan/tracking.png') }}" alt="tracking">
                                <a href="#" class="h5 title text-dark d-block mb-0">Distribusi</a>
                                <p class="text-muted mt-2 mb-0">Kembangkan bisnis dengan
                                    memantau distribusi produk yang dijual disetiap wilayah.</p>
                            </div>
                        </div>
                    </div>
                    {{-- end card --}}
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Why -->

    <!-- Start Pricing -->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title fw-semibold mb-4">Harga Paket</h4>
                        <p class="para-desc text-muted mx-auto mb-0">Dapatkan harga terbaik dari layanan
                            {{ $setting_web->nama_website }}<br>
                            Ayo tunggu apalagi Pesan sekarang Juga!</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 shadow">
                        <div class="p-4 border-bottom border-light">
                            <h6 class="fw-semibold mb-3 text-uppercase">Free</h6>
                            <p class="text-muted mb-0">Untuk mendapatkan sample label</p>

                            <div class="d-flex my-4">
                                <span class="price h3 fw-semibold mb-0">Rp. 0</span>
                                <span class="text-muted align-self-end mb-1">/Pcs</span>
                            </div>

                            <a href="https://api.whatsapp.com/send/?phone=6281299903331&text&type=phone_number&app_absent=0"
                                class="btn btn-primary w-100">Ajukan Sample</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 shadow">
                        <div class="p-4 border-bottom border-light">
                            <h6 class="fw-semibold mb-3 text-uppercase">Startups</h6>
                            <p class="text-muted mb-0">Mendapatkan label bahan thermal 2D</p>

                            <div class="d-flex my-4">
                                <span class="price h3 fw-semibold mb-0">Rp. 350</span>
                                <span class="text-muted align-self-end mb-1">/Pcs</span>
                            </div>

                            <a href="{{ route('partner.register') }}" class="btn btn-primary w-100">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 shadow">
                        <div class="p-4 border-bottom border-light">
                            <h6 class="fw-semibold mb-3 text-uppercase">Business</h6>
                            <p class="text-muted mb-0">Mendapatkan label digital printing</p>

                            <div class="d-flex my-4">
                                <span class="price h3 fw-semibold mb-0">Rp. 900</span>
                                <span class="text-muted align-self-end mb-1">/Pcs</span>
                            </div>

                            <a href="{{ route('partner.register') }}" class="btn btn-primary w-100">Beli Sekarang</a>
                        </div>

                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card border-0 shadow">
                        <div class="p-4 border-bottom border-light">
                            <h6 class="fw-semibold mb-3 text-uppercase">Premium</h6>
                            <p class="text-muted mb-0">Mendapatkan label hologram 3D</p>

                            <div class="d-flex my-4">
                                <span class="price h3 fw-semibold mb-0">Rp. 1000</span>
                                <span class="text-muted align-self-end mb-1">/Pcs</span>
                            </div>

                            <a href="{{ route('partner.register') }}" class="btn btn-primary w-100">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Pricing -->

    <!-- CTA Start -->
    <section class="section" style="background: url('{{ asset('template/frontend/images/bg/cta.png') }}') center">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center">
                        <h4 class="title text-white mb-3">Mulai perjalanan bisnis Anda lebih baik bersama Labelin.co
                        </h4>
                        <p class="text-white-50 mx-auto para-desc mb-0" style="color:white">Buat agenda dengan tim
                            Labelin.co, selama 30 menit kedepan melalui Google Meet.</p>

                        <div class="mt-4 pt-2">
                            <a href="https://calendly.com/labelinco/bicara-dengan-tim-labelinco" target="blank"
                                class="btn btn-primary">Buat Agenda Meeting Online</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- CTA End -->

    <!-- Start Contact -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Kontak Kami</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Untuk pertanyaan seputar layanan
                            {{ $setting_web->nama_website }}, hubungi kami dengan mengisi form dibawah ini.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 order-md-2 order-1 mt-4 pt-2">
                    <div class="p-4 rounded shadow bg-white">
                        <form method="post" name="myForm" action="{{ route('send_kontak') }}">
                            @csrf
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <input id="name" type="text" class="form-control"
                                            name="nama_lengkap" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <input id="email" type="email" class="form-control" name="email"
                                            placeholder="Email" required>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12">
                                    <div class="mb-4">
                                        <input id="subject" class="form-control" name="subjek"
                                            placeholder="Subject" required>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-12">
                                    <div class="mb-4">
                                        <textarea id="comments" rows="4" name="deskripsi" required class="form-control"
                                            placeholder="Deskripsi Pesan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-end">
                                    <button type="submit" id="submit" name="send"
                                        class="btn btn-primary">Kirim Pesan</button>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6 col-12 order-md-1 order-2 mt-4 pt-2">
                    <div class="me-lg-4">
                        <div class="d-flex">
                            <div class="icons text-center mx-auto">
                                <i class="uil uil-phone d-block rounded h4 mb-0"></i>
                            </div>

                            <div class="flex-1 ms-3">
                                <h5 class="mb-2">Telepon</h5>
                                <a href="tel:{{ $setting_web->telpon }}"
                                    class="text-muted">{{ $setting_web->telpon }}</a>
                            </div>
                        </div>

                        <div class="d-flex mt-4">
                            <div class="icons text-center mx-auto">
                                <i class="uil uil-envelope d-block rounded h4 mb-0"></i>
                            </div>

                            <div class="flex-1 ms-3">
                                <h5 class="mb-2">Email</h5>
                                <a href="mailto:{{ $setting_web->email }}"
                                    class="text-muted">{{ $setting_web->email }}</a>
                            </div>
                        </div>

                        <div class="d-flex mt-4">
                            <div class="icons text-center mx-auto">
                                <i class="uil uil-map-marker d-block rounded h4 mb-0"></i>
                            </div>

                            <div class="flex-1 ms-3">
                                <h5 class="mb-2">Alamat</h5>
                                <p class="text-muted mb-2">{{ $setting_web->alamat }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Contact -->

    <!-- Footer Start -->
    <footer class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-60">
                        <div class="row">
                            <div class="col-lg-3 col-12 mb-lg-0 mb-md-4 pb-lg-0 pb-md-2">
                                <a href="#" class="logo-footer">
                                    <img src="{{ asset('img/logo_white.png') }}" height="50" alt="logo_white">
                                </a>
                                <p class="mt-4 mb-0" style="text-align: justify">{{ $setting_web->deskripsi }}</p>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Layanan dan Teknologi</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="#" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Smart Label</a></li>
                                    <li><a href="#" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Smart Packaging</a></li>
                                    <li><a href="#" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Distribution Tracking
                                            System</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Get In Touch</h5>

                                <p class="mt-4">{{ $setting_web->alamat }}</p>
                                <ul class="list-unstyled footer-list mt-3">
                                    <li>Phone: <a href="tel:{{ $setting_web->telpon }}"
                                            class="text-light">{{ $setting_web->telpon }}</a></li>
                                    <li>Email: <a href="mailto:{{ $setting_web->email }}"
                                            class="text-light">{{ $setting_web->email }}</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="footer-head">Terhubung Dengan Kami</h5>
                                <ul class="list-unstyled social-icon text-md foot-social-icon mb-0">
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/labelin_co/?igshid=YmMyMTA2M2Y%3D"
                                            target="_blank" class="rounded">
                                            <i class="uil uil-instagram align-middle" title="instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i
            data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('template/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('template/frontend/js/tobii.min.js') }}"></script>
    <script src="{{ asset('template/frontend/js/contact.js') }}"></script>
    <script src="{{ asset('template/frontend/js/gumshoe.js') }}"></script>
    <script src="{{ asset('template/frontend/js/feather.min.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('template/frontend/js/plugins.init.js') }}"></script>
    <script src="{{ asset('template/frontend/js/app.js') }}"></script>
    @include('sweetalert::alert')
</body>

<!-- Mirrored from shreethemes.in/Pcstos/layouts/index-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Oct 2022 14:03:39 GMT -->

</html>
