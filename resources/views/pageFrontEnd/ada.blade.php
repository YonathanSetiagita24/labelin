<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scan Produk</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('template/scan/css/login-style.css') }} ">
    <link rel="stylesheet" href="{{ asset('template/scan/assets/fontawesome-free/css/all.min.css') }}">
    <link href="{{ asset('template/scan/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('template/scan/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('template/scan/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="icon" href="{{ asset('template/scan/assets/web-images/lock.png') }}" sizes="16x16" type="image/png">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: grid;
            place-items: center;
            min-height: 100vh;
            background-color: rgb(0, 0, 15);
        }


        /* SUBSCRIBE ==> https://www.youtube.com/channel/UCzWS-AiirxpTDq_AGSg9Fhg */
        /* SUBSCRIBE ==> https://www.youtube.com/channel/UCzWS-AiirxpTDq_AGSg9Fhg */

        .border-pin {
            display: flex;
        }

    </style>

</head>
<body>
    <div class="trail">
        <canvas id="world" width="876" height="657"></canvas>
    </div>
    <div class="container" style="opacity:1;">
        <div class="row-fluid" style="padding-top: 0vh;">
            <div class="col-sm-offset-2 col-md-offset-4 col-sm-8 col-md-4 col-xs-12 login-form">
                <div class="row-fluid">
                    <div class="col-sm-12 logo-login-form" style="text-align: center; margin: 4vh 0;">
                        <img src="{{ Storage::url('public/img/setting_web/') . $setting_web->logo_dark }}" class="img-fluid center-block">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col-sm-12">
                        <center>
                            <h4>Congratulations !!!</h4>
                            Pembelian yang terhormat, Serial Number <b>{{ $sn }}</b> & PIN <b>{{ $pin }}</b> tersebut dinyatakan terdaftar di {{ $setting_web->nama_website }}
                            <hr>
                            <b>
                                Nama Produk : {{ $produk->nama_produk }} <br>
                                Kategori Produk : {{ $produk->nama_kategori }}
                            </b>
                            <hr>
                            Tidak perlu khawatir untuk menggunakan produk ini. <br>
                            Terima kasih atas dukungan Anda terhadap {{ $setting_web->nama_website }} sebagai penyedia layanan label berbasis barcode yang mampu menjamin keaslian produk.
                        </center>
                        <div class="button-wrapper">
                            <div class="button-container">
                                <a href="{{ route('scan', $sn) }}" style="text-decoration: none" class="button" type="submit" value="Kembali" id="btn-login"> Kembali</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('template/scan/assets/web-js/login-js.js') }}"></script>
    @include('sweetalert::alert')
</body>
</html>
