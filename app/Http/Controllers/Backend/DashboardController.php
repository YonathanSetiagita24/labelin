<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\{Business, Category, Partner, Product, ProductScanned, RequestQr};
use Illuminate\Http\Request;
use App\Models\SettingWeb;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $totalPartner = Partner::count();
        $totalBusiness = Business::count();
        $totalProduct = Product::count();
        $totalRequestQr = RequestQr::count();
        $totalCategory = Category::count();
        $awal =$request->get('start_date').' '.'00:00:01';
        $akhir =$request->get('end_date').' '.'23:59:59';
        switch ($request->exists('start_date') && $request->exists('end_date')) {
            case true:
                $totalProductScanned = ProductScanned::where('product_scanneds.created_at', '>=', $awal)
                ->where('product_scanneds.created_at', '<=', $akhir)->count();

                $totalGender = DB::table('product_scanneds')
                    ->where('product_scanneds.created_at', '>=', $awal)
                    ->where('product_scanneds.created_at', '<=', $akhir)

                    ->select('gender', DB::raw('count(*) as total_gender'))
                    ->groupBy('gender')
                    ->get();
                break;
            default:
                $totalProductScanned = ProductScanned::count();
                $totalGender = DB::table('product_scanneds')
                    ->select('gender', DB::raw('count(*) as total_gender'))
                    ->groupBy('gender')
                    ->get();
                break;
        }

        // dd($totalGender[0]->total_gender);
        return view('pageBackEnd.dashboard.index',  compact(
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
