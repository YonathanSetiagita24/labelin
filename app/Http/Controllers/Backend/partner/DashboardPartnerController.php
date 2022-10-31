<?php

namespace App\Http\Controllers\Backend\partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Business, Category, Partner, Product, ProductScanned, RequestQr};
use Illuminate\Support\Facades\DB;

class DashboardPartnerController extends Controller
{
    // public function index()
    // {
    //     return view('pageBackEnd.pageBackEndPartner.dashboard');
    // }

    public function index(Request $request)
    {
        $totalPartner = Partner::where('id', session()->get('id-partner'))->count();
        $totalBusiness = Business::where('partner_id', session()->get('id-partner'))->count();
        $totalProduct = Product::where('partner_id', session()->get('id-partner'))->count();
        $totalRequestQr = RequestQr::where('partner_id', session()->get('id-partner'))->count();
        $totalCategory = Category::count();
        $awal =$request->get('start_date').' '.'00:00:01';
        $akhir =$request->get('end_date').' '.'23:59:59';
        switch ($request->exists('start_date') && $request->exists('end_date')) {
            case true:
                $totalProductScanned = DB::table('product_scanneds')
                ->join('qr_codes', 'product_scanneds.qr_code_id', '=', 'qr_codes.id')
                ->join('request_qrs', 'qr_codes.request_qr_id', '=', 'request_qrs.id')
                ->where('product_scanneds.created_at', '>=', $awal)
                ->where('product_scanneds.created_at', '<=', $akhir)
                ->where('request_qrs.partner_id', session()->get('id-partner'))
                ->count();
                $totalGender = DB::table('product_scanneds')
                    ->join('qr_codes', 'product_scanneds.qr_code_id', '=', 'qr_codes.id')
                    ->join('request_qrs', 'qr_codes.request_qr_id', '=', 'request_qrs.id')
                    ->join('products', 'request_qrs.product_id', '=', 'products.id')
                    ->join('businesses', 'products.business_id', '=', 'businesses.id')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->select('gender', DB::raw('count(*) as total_gender','request_qrs.partner_id'))
                    ->where('product_scanneds.created_at', '>=', $awal)
                    ->where('product_scanneds.created_at', '<=', $akhir)
                    ->where('request_qrs.partner_id', session()->get('id-partner'))
                    ->groupBy('gender')
                    ->get();
                break;
            default:
                $totalProductScanned = DB::table('product_scanneds')
                ->join('qr_codes', 'product_scanneds.qr_code_id', '=', 'qr_codes.id')
                ->join('request_qrs', 'qr_codes.request_qr_id', '=', 'request_qrs.id')
                ->where('request_qrs.partner_id', session()->get('id-partner'))
                ->count();
                $totalGender = DB::table('product_scanneds')
                    ->join('qr_codes', 'product_scanneds.qr_code_id', '=', 'qr_codes.id')
                    ->join('request_qrs', 'qr_codes.request_qr_id', '=', 'request_qrs.id')
                    ->join('products', 'request_qrs.product_id', '=', 'products.id')
                    ->join('businesses', 'products.business_id', '=', 'businesses.id')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->select('gender', DB::raw('count(*) as total_gender','request_qrs.partner_id'))
                    ->where('request_qrs.partner_id', session()->get('id-partner'))
                    ->groupBy('gender')
                    ->get();
                break;
        }

        // dd($totalGender[0]->total_gender);
        return view('pageBackEnd.pageBackEndPartner.dashboard',  compact(
            'totalPartner',
            'totalBusiness',
            'totalProduct',
            'totalRequestQr',
            'totalProductScanned',
            'totalGender',
            'totalCategory'
        ));
    }
}
