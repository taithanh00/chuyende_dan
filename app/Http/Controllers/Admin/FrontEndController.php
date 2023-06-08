<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;
use App\Models\UserTable;
use App\Models\User;
use App\Models\Type;
use App\Models\Food;
use App\Models\ListOrder;
use Illuminate\Support\Facades\Session;

class FrontEndController extends Controller
{
    public $total_price;
    public function Index(Request $request)
    {
        //session(['total_price' => 0]);
        $types = DB::table('type')->get()->toArray();
        $foods = DB::table('food')->get()->toArray();
        $total_price = session('total_price');
        $login_email = Session::get('login_email');
        $foodss = DB::table('food')
        ->join('type', 'food.type_id', '=', 'type.type_id')
        ->where('type.type_name', $request->type_name)
        ->select('food.food_name as name', 'food.image as image_url', 'food.food_money as price')
        ->get();
        return view('frontend.layouts.index', ['login_email' => $login_email], compact('types', 'foods', 'total_price', 'login_email','foodss'));
    }
    public function Login_Register(Request $request)
    {
        $usertable_email = DB::table('user_table')->pluck('user_name')->toArray();
        $usertable_password = DB::table('user_table')->pluck('user_password')->toArray();
        $usertable = DB::table('user_table')->get()->toArray();
        $login_input_email = $request->input('staff_email');
        $login_input_password = $request->input('password');
        $usertable = DB::table('user_table')
            ->where('user_name', $login_input_email)
            ->where('user_password', $login_input_password)
            ->first();
        if ($usertable) {
            $request->session()->put('username', $login_input_email);
            $response = redirect()->route('index');
            $response->send();
        } else {
            // return redirect()->back()->with('error', 'Invalid username or password')->withInput();
            // $response = redirect()->route('frontendlogin')->with('message', 'Login Failed');
            // $response->send();
            // $responsefail = redirect()->route('frontendlogin')->with('message', 'Login Failed');
            // $responsefail->send();
            // echo 'Type again';
        }
        // Store the email in the session
        Session::put('login_email', $login_input_email);

        return view('frontend.layouts.login', compact('login_input_email', 'login_input_password'));
    }
    //register
    //logout
    public function CheckType(Request $request)
    {
        $login_email = Session::get('login_email');
        $types = DB::table('type')->get()->toArray();
        $foods = DB::table('food')->get()->toArray();
        $id_types = DB::table('type')->pluck('type_id')->toArray();
        $total_price = session('total_price');
        $request_typename = $request->type_name;
        $foodss = DB::table('food')
            ->join('type', 'food.type_id', '=', 'type.type_id')
            ->where('type.type_name', $request->type_name)
            ->select('food.food_name as name', 'food.image as image_url', 'food.food_money as price')
            ->get();
        Session::put('foodss', $foodss);
        return view('frontend.layouts.index', compact('login_email', 'types', 'foods', 'total_price', 'id_types', 'foodss'));
    }
    public function AddToCart(Request $request)
    {
        dd($request->food_name);
        $types = DB::table('type')->get()->toArray();
        $foods = DB::table('food')->get()->toArray();
        $lists_order = DB::table('list_order')->get()->toArray();
        $list_order_name = DB::table('list_order')->pluck('food_name')->toArray();
        $total_price = 0;
        $food_id = $request->category_id;
        $request->validate([
            'food_id' => 'required',
            'image' => '',
            'food_name' => '',
            'food_money' => ''

        ]);
        // Get the previous total price from session
        $total_price = session('total_price', 0);
        // Add the new product price to the total priceư
        $total_price += $request->food_money;
        // Store the updated total price in session
        session(['total_price' => $total_price]);
        $found = false;
        foreach ($list_order_name as $name) {
            if ($name == $request->food_name) {
                DB::table('list_order')->where('food_name', $request->food_name)->increment('quantity');
                $found = true;
                break;
            }
        }
        if (!$found) {
            ListOrder::insert([
                'food_name' => $request->food_name,
                'food_money' => $request->food_money,
                'quantity' => 1,
                'total_price' => $request->food_money
            ]);
        }
        return redirect()->route('index', compact('total_price', 'types', 'foods','foodss'));
    }
    public function FindTable()
    {
        $total_price = session('total_price');
        $list_final = ListOrder::latest()->get();
        return view('frontend.layouts.table', compact('total_price', 'list_final'));
    }
}
