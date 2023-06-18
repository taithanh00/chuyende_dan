<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\ListOrder;
use ConsoleTVs\Charts\Charts;

class ChartController extends Controller
{
    public function Index()
    {
        $list_orders = ListOrder::select('food_name', 'quantity')->get();
        return view('frontend.layouts.admin.guruable-master.index', compact('list_orders'));
    }
}
