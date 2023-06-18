<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Food;
use App\Models\Type;

class FoodController extends Controller
{
    public function Index()
    {

        $foods = Food::all();
        return view('frontend.layouts.admin-frontend.allfoods', compact('foods'));
    }
    public function EditFoods()
    {
        $types = DB::table('type')->select('*');
        $types = $types->get();
        return view('frontend.layouts.admin-frontend.editfoods', compact('types'));
    }
    public function StoreFoods(Request $request)
    {
        $request->validate([
            'food_name' => 'required',
            'food_price' => 'required|numeric',
            'food_image' => 'required',
            'type_id' => 'required'
        ]);

        Food::insert([
            'food_name' => $request->food_name,
            'food_money' => $request->food_price,
            'image' => $request->food_image,
            'type_id' => $request->type_id

        ]);
        return redirect()->route('allfoods')->with('message', 'Food Added Successfully');
    }
    public function Edit2Foods()
    {
        $foods = Food::all();
        $types = DB::table('type')->select('*');
        $types = $types->get();
        // $food_info = Food::findOrFail($id);
        return view('frontend.layouts.admin-frontend.edit2foods', compact('foods', 'types'));
    }
    public function UpdateFoods(Request $request)
    {
        $selectedFoodId = $request->input('food_submit');

        $food = Food::findOrFail($selectedFoodId);

        $request->validate([
            'food_name_change' => 'nullable|string|max:255',
            'food_price_change' => 'nullable|numeric',
            'food_image_change' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type_id_change' => 'nullable|exists:types,id'
        ]);

        // Lấy giá trị mới từ request
        $foodName = $request->input('food_name_change');
        $foodPrice = $request->input('food_price_change');
        $foodImage = $request->file('food_image_change');
        $typeId = $request->input('type_id_change');

        // Kiểm tra nếu có giá trị mới cho tên món ăn
        if ($foodName !== null && $foodName !== $food->food_name) {
            $food->food_name = $foodName;
        }

        // Kiểm tra nếu có giá trị mới cho giá tiền của món ăn
        if ($foodPrice !== null && $foodPrice !== $food->food_money) {
            $food->food_money = $foodPrice;
        }

        // // Kiểm tra nếu có ảnh mới được upload
        // if ($foodImage !== null) {
        //     // Lưu file ảnh mới vào thư mục public/images/foods
        //     $filename = time() . '.' . $foodImage->getClientOriginalExtension();
        //     $foodImage->move(public_path('images/foods'), $filename);

        //     // Cập nhật đường dẫn đến ảnh mới trong cơ sở dữ liệu
        //     $food->image = '/images/foods/' . $filename;
        // }
        if ($foodImage !== null && $foodImage !== $food->image) {
            $food->image = $foodImage;
        }

        // Kiểm tra nếu có giá trị mới cho loại món ăn
        if ($typeId !== null && $typeId !== $food->type_id) {
            $food->type_id = $typeId;
        }

        // Lưu thông tin món ăn mới vào cơ sở dữ liệu
        $food->save();

        return redirect()->route('allfoods')->with('message', 'Thông tin món ăn đã được cập nhật thành công!');
    }
    public function DeleteFoods(Request $request)
    {
        // $selectedFoodId = $request->input('food_submit');
        // $food = Food::findOrFail($selectedFoodId);
        // dd($food);

        $foods = Food::all();
        $types = DB::table('type')->select('*');
        $types = $types->get();
        return view('frontend.layouts.admin-frontend.deletefoods', compact('foods', 'types'));
        // return redirect()->route('allfoods')->with('message', 'Xóa món ăn thành công!');
    }
    public function DeleteFoods_Final(Request $request)
    {
        $selectedFoodId = $request->input('food_submit');
        $food = Food::findOrFail($selectedFoodId);

        DB::table('food')->where('food_id', $food->food_id)->delete();
        return redirect()->route('allfoods')->with('message', 'Món ăn đã được xóa thành công!');
    }
}
