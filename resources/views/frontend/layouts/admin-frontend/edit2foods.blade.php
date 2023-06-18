@extends('frontend.layouts.admin.guruable-master.index')
@section('page_title')
    Change Food
@endsection
@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="sub-title">Change Foods</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @foreach ($foods as $food)
                <form action="{{ route('updatefoods') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Food ID</label>
                        <div class="col-sm-10">
                            <input type="hidden" value="{{ $food->food_id }}" name="food_id">
                            <input value="{{ $food->food_id }}" type="text" class="form-control" id="food_id"
                                name="food_id" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Food Name</label>
                        <div class="col-sm-10">
                            <input value="{{ $food->food_name }}" type="text" class="form-control"
                                id="food_name_{{ $food->food_id }}" name="food_name_{{ $food->food_id }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Food Name Change</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="food_name_change" name="food_name_change">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Food Price</label>
                        <div class="col-sm-10">
                            <input value="{{ $food->food_money }}" type="number" class="form-control"
                                id="food_price_{{ $food->food_id }}" name="food_price_{{ $food->food_id }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Food Price Change</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="food_price_change" name="food_price_change">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Food Image</label>
                        <div class="col-sm-10">
                            <input value="{{ $food->image }}" type="text" class="form-control"
                                id="food_image_{{ $food->food_id }}" name="food_image{{ $food->food_id }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Food Image Change</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="food_image_change" name="food_image_change">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Food Type ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="type_id" name="type_id"
                                value="{{ $food->type_id }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Box</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="type_change_id" name="type_change_id">
                                <option value="opt1">Select Type ID</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->type_id }}"> {{ $type->type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="food_submit"
                                value="{{ $food->food_id }}">Thay Đổi Thông Tin Về Món Ăn</button>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection
