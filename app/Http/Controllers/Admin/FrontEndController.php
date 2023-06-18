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
use App\Models\Tables;
use App\Models\ListOrder;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class FrontEndController extends Controller
{
    public $total_price;
    public function Index(Request $request)
    {
        $price_final = session('price_final');
        $foodss = DB::table('food')
            ->join('type', 'food.type_id', '=', 'type.type_id')
            ->where('type.type_name', $request->type_name)
            ->select('food.food_name as name', 'food.image as image_url', 'food.food_money as price')
            ->get();

        session()->put('foodss', $foodss);
        // dd($price_final);
        $types = DB::table('type')->get();
        $foods = DB::table('food')->get();
        $total_price = session('total_price');
        $login_email = session('login_email');

        return view('frontend.layouts.index', compact('login_email', 'types', 'foods', 'foodss', 'total_price', 'price_final'));
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
            // echo 'dont complete';
        }
        // Store the email in the session
        Session::put('login_email', $login_input_email);

        return view('frontend.layouts.login', compact('login_input_email', 'login_input_password'));
    }
    //register
    //logout
    public function Logout(Request $request)
    {
        // Xóa thông tin đăng nhập khỏi session
        $request->session()->forget('username');

        // Chuyển hướng người dùng đến trang đăng nhập hoặc trang khác tùy ý
        return redirect()->route('login');
    }
    public function CheckType(Request $request)
    {
        $price_final = session('price_final');
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
        return view('frontend.layouts.index', compact('login_email', 'types', 'foods', 'total_price', 'id_types', 'foodss', 'price_final'));
    }
    public function AddToCart(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        if (DB::table('list_order')->where('food_name', $name)->exists()) {
            DB::table('list_order')->where('food_name', $name)->increment('quantity');
            $quantity = DB::table('list_order')->where('food_name', $name)->value('quantity');
            $total_price = $price * $quantity;
            DB::table('list_order')->where('food_name', $name)->update(['total_price' => $total_price]);
        } else {
            $list_order = new ListOrder;
            $list_order->food_name = $name;
            $list_order->food_money = $price;
            $list_order->quantity = 1;
            $list_order->total_price = $list_order->food_money * $list_order->quantity;
            $list_order->save();
        }

        $list_orders = DB::table('list_order')->select('food_money', 'quantity')->get();
        $price_final = 0;

        foreach ($list_orders as $order) {
            $price_final += $order->food_money * $order->quantity;
        }

        session()->put('price_final', $price_final);
        return redirect()->route('index', compact('price_final'));
    }
    public function FindTable()
    {
        $login_email = session('login_email');
        $price_final = session('price_final');
        $total_price = session('total_price');
        $list_final = ListOrder::latest()->get();
        $list_final_created_at = DB::table('list_order')->pluck('created_at')->first();
        $list_final_created_at2 = DB::table('list_order')->pluck('created_at')->last();
        // dd($list_final_created_at);
        $time = Carbon::createFromFormat('Y-m-d H:i:s', $list_final_created_at)->format('H:i:s');
        $time2 = Carbon::createFromFormat('Y-m-d H:i:s', $list_final_created_at2)->format('H:i:s');
        return view('frontend.layouts.table', compact('total_price', 'list_final', 'price_final', 'login_email', 'list_final_created_at', 'time', 'time2'));
    }
    public function Confirm(Request $request)
    {
        $price_final = session('price_final');
        $login_email = session('login_email');
        $foodss = session('foodss');
        $list_final = DB::table('list_order')->pluck('food_name')->toArray();
        $list_final2 = DB::table('list_order')->pluck('food_money')->toArray();
        $list_final3 = DB::table('list_order')->pluck('total_price')->toArray();
        $types = DB::table('type')->get()->toArray();

        $data = [];

        foreach ($list_final as $key => $item) {
            $data[] = [
                'table_number' => $login_email,
                'list_order' => $item . ' - ' . $list_final2[$key] . ' - ' . $list_final3[$key],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('usertable_order')->insert($data);
        foreach ($list_final as $key => $item) {
            DB::table('list_order')->where('food_name', $item)
                ->where('food_money', $list_final2[$key])
                ->where('total_price', $list_final3[$key])
                ->delete();
        }
        session()->put('price_final', 0);

        // return view('frontend.layouts.index', compact('login_email', 'types', 'foodss','price_final'));
        return redirect()->route('index', compact('login_email', 'types', 'foodss', 'price_final'))->with('success', 'Checkout Successfully');
    }
    public function Alltable()
    {
        $tables = Tables::all();
        $get_value = session('get_value');
        return view('frontend.layouts.alltable', compact('tables', 'get_value'));
    }
    public function AlltableFind(Request $request)
    {
        $value = $request->input('table');
        $tables = Tables::all();
        $get_value = DB::table('usertable_order')
            ->where('table_number', $value)
            ->pluck('list_order')
            ->all();

        session()->put('get_value', $get_value);
        if ($get_value) {
            return view('frontend.layouts.alltable', compact('tables', 'get_value'));
        } else {
            return 'Không tìm thấy giá trị';
        }
    }
    public function Admin()
    {
        $list_orders = ListOrder::select('food_name', 'quantity')->get();
        return view('frontend.layouts.admin.guruable-master.index', compact('list_orders'));
    }
}
