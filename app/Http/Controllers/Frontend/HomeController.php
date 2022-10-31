<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterPartnerRequest;
use App\Models\{Kontak, SettingWeb};
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Partner;
use Illuminate\Support\Facades\{Hash, Session, Validator, DB};

class HomeController extends Controller
{
    private $settings;

    public function __construct()
    {
        $settings = SettingWeb::first();
        $this->settings = $settings;
    }

    public function labelin()
    {
        if ($this->settings->is_aktif_website === 'T') {
            return view('pageFrontEnd.mt', ['setting_web' => $this->settings]);
        }

        return view('pageFrontEnd.labelin', [
            'setting_web' => $this->settings,
        ]);
    }
    public function index()
    {
        if ($this->settings->is_aktif_website === 'T') {
            return view('pageFrontEnd.mt', ['setting_web' => $this->settings]);
        }

        return view('pageFrontEnd.index', [
            'setting_web' => $this->settings,
        ]);
    }

    public function login()
    {
        if ($this->settings->is_aktif_website === 'T') {
            return view('pageFrontEnd.mt', ['setting_web' => $this->settings]);
        }
        return view('pageFrontEnd.login', [
            'setting_web' => $this->settings,
        ]);
    }

    public function register()
    {
        if ($this->settings->is_aktif_website === 'T') {
            return view('pageFrontEnd.mt', ['setting_web' => $this->settings]);
        }

        return view('pageFrontEnd.register', [
            'setting_web' => $this->settings,
        ]);
    }

    public function scan($sn)
    {
        if ($this->settings->is_aktif_website === 'T') {
            return view('pageFrontEnd.mt', ['setting_web' => $this->settings]);
        }

        return view('pageFrontEnd.scan', [
            'setting_web' => $this->settings,
        ]);
    }

    public function DoLogin(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => "required|email",
                'password' => 'required|string',
            ],
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        $partner = Partner::where('email', $request->email)->first();

        if ($partner && Hash::check($request->password, $partner->password)) {
            Session::put('id-partner', $partner->id);
            Session::put('name-partner', $partner->name);
            Session::put('email-partner', $partner->email);
            Session::put('login-partner', TRUE);

            return redirect()->route('PartnerDashboard');
        } else {
            Alert::error('Failed', 'Email atau Password anda salah!');

            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
    }

    public function DoLogout(Request $request)
    {
        $request->session()->forget('id-partner');
        $request->session()->forget('name-partner');
        $request->session()->forget('email-partner');
        $request->session()->forget('photo-partner');
        $request->session()->forget('login-partner');

        return redirect()->route('web_login');
    }

    public function doRegister(RegisterPartnerRequest $request)
    {
        $attr = $request->validated();
        $attr['password'] = bcrypt($request->password);

        $partner =  Partner::create($attr);

        Session::put('id-partner', $partner->id);
        Session::put('name-partner', $partner->name);
        Session::put('email-partner', $partner->email);
        Session::put('photo-partner', $partner->photo);
        Session::put('login-partner', TRUE);

        $partner->update([
            'code' => str(uniqid())->upper()
        ]);

        Alert::success('Success', 'Kamu berhasil register!');

        return redirect()->route('PartnerDashboard');
    }

    public function kontak(Request $request)
    {
        try {
            Kontak::create([
                'nama_lengkap'   => $request->nama_lengkap,
                'email'   => $request->email,
                'subjek'   => $request->subjek,
                'deskripsi'   => $request->deskripsi,
            ]);

            Alert::success('Success', 'Pesan berhasil dikirim');

            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();

            Alert::error('Failed', 'Pesan gagal dikirim');

            return redirect()->back();
        }
    }

    public function cek_produk(Request $request)
    {
        $pin = $request->satu . '' . $request->dua . '' . $request->tiga . '' . $request->empat . '' . $request->lima . '' . $request->enam;
        $cek = DB::table('qr_codes')
            ->where('pin', '=', $pin)
            ->where('serial_number', '=', $request->sn)
            ->first();
        // ambil data produk
        if ($cek) {
            $produk = DB::table('qr_codes')
                ->join('request_qrs', 'qr_codes.request_qr_id', '=', 'request_qrs.id')
                ->join('products', 'request_qrs.product_id', '=', 'products.id')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.name as nama_produk', 'categories.name as nama_kategori')
                ->first();
            //inser ke table scan
            DB::table('product_scanneds')->insert([
                'qr_code_id' => $cek->id,
                'fullname' => $request->nama_lengkap,
                'birth_date' => $request->tgl_lahir,
                'gender' => $request->jk_kelamin,
                'lat' => $request->latitude,
                'long' => $request->longitude,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            Alert::toast('Congratulations !!! Produk Terdaftar', 'success');
            return view('pageFrontEnd.ada', [
                'setting_web' => $this->settings,
                'sn' => $request->sn,
                'pin' => $pin,
                'produk' => $produk
            ]);
        } else {
            Alert::toast('Warning !!! Produk Tidak Terdaftar', 'error');
            return view('pageFrontEnd.tidak_ada', [
                'setting_web' => $this->settings,
                'sn' => $request->sn,
                'pin' => $pin,
            ]);
        }
    }
}
