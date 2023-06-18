<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Coupons;
class CouponsController extends Controller
{
    public function Index()
    {

        $coupons = Coupons::all();
        return view('frontend.layouts.admin-frontend.allcoupons', compact('coupons'));
    }
    public function EditCoupons ()
    {
        return view('frontend.layouts.admin-frontend.editcoupons');
    }
    public function StoreCoupons (Request $request)
    {
        $request->validate([
            'coupon_name' => 'required',
            'coupon_code' => 'required',
            'coupon_validate' => 'required'
        ]);

        Coupons::insert([
            'coupon_name' => $request->coupon_name,
            'coupon_code' => $request->coupon_code,
            'coupon_validate' => $request->coupon_validate
        ]);
        return redirect()->route('allcoupons')->with('message', 'Coupons Added Successfully');
    }
}
