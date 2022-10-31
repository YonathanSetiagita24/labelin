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

        .num {
            color: #000;
            background-color: transparent;
            width: 17%;
            height: 60px;
            text-align: center;
            outline: none;
            padding: 1rem 1rem;
            margin: 0 1px;
            font-size: 24px;
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: .5rem;
            color: rgba(0, 0, 0, 0.5);
        }

        .num:focus,
        .num:valid {
            box-shadow: 0 0 .5rem rgba(20, 3, 255, 0.5);
            inset 0 0 .5rem rgba(20, 3, 255, 0.5);
            border-color: rgba(20, 3, 255, 0.5);
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
                        <form method="POST" action="{{ route('cek_produk') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama_lengkap">Serial Number</label>
                                <input type="text" class="form-control" name="sn" id="sn" readonly value="{{ Request::segment(2) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" aria-describedby="emailHelp" placeholder="" name="nama_lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="jk_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jk_kelamin" name="jk_kelamin" required>
                                    <option>-- Pilih --</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jk_kelamin">Masukan PIN</label>
                                <div class="border-pin">
                                    <input type="text" name="satu" class="num" maxlength="1" required>
                                    <input type="text" name="dua" class="num" maxlength="1" required>
                                    <input type="text" name="tiga" class="num" maxlength="1" required>
                                    <input type="text" name="empat" class="num" maxlength="1" required>
                                    <input type="text" name="lima" class="num" maxlength="1" required>
                                    <input type="text" name="enam" class="num" maxlength="1" required>
                                </div>
                                <span style="color: red; font-size:10px">* PIN terdapat pada label QR</span>
                            </div>
                            <input type="hidden" name="latitude" id="latitude">
                            <input type="hidden" name="longitude" id="longitude">
                            <div class="button-wrapper" style="margin-bottom: 10px;">
                                <div class="button-container">
                                    <input class="button" type="submit" value="Cek Produk" id="btn-login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('template/scan/assets/web-js/login-js.js') }}"></script>
    @include('sweetalert::alert')


    <script>
        $(document).ready(function() {
            // untuk memeriksa jika browser tidak support maka akan muncul alert
            if (!navigator.geolocation)
                return alert("Geolocation is not supported.");
            // jika browser support maka fungsi ini akan dijalankan
            navigator.geolocation.getCurrentPosition((position) => {
                // tambahkan callback untuk menampilkan latitude dan longitude
                $("#latitude").val(`${position.coords.latitude}`);
                $("#longitude").val(`${position.coords.longitude}`);
            });
        });

    </script>
</body>
</html>
