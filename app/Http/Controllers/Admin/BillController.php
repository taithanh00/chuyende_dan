<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bill;
use App\Models\Client;
use App\Models\Order;
use App\Models\Bill_Detail;

class BillController extends Controller
{
    public function Index()
    {

        $bills = Bill::all();
        return view('frontend.layouts.admin-frontend.allbills', compact('bills'));
    }
    public function EditBills()
    {
        $clients = DB::table('clients')->select('*');
        $clients = $clients->get();

        $orders = DB::table('oder')->select('*');
        $orders = $orders->get();

        $bill_details = DB::table('bill_detail')->select('*');
        $bill_details = $bill_details->get();
        return view('frontend.layouts.admin-frontend.editbills', compact('clients', 'orders', 'bill_details'));
    }
    public function StoreBills(Request $request)
    {
        $request->validate([
            'bill_day' => 'required|numeric',
            'bill_time' => 'required',
            'bill_total' => 'required',
            'payment' => 'required',
            'client_id	' => 'required',
            'oder_id' => 'required',
            'billdetail_id' => 'required'
        ]);

        Bill::insert([
            'bill_day' => $request->bill_day,
            'bill_time' => $request->bill_time,
            'bill_total' => $request->bill_total,
            'payment' => $request->payment,
            'client_id' => $request->client_id,
            'oder_id' => $request->oder_id,
            'billdetail_id' => $request->billdetail_id
        ]);
        return redirect()->route('allbills')->with('message', 'Thêm Hóa Đơn Thành Công');
    }
}
