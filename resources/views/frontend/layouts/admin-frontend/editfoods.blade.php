@extends('frontend.layouts.admin.guruable-master.index')
@section('page_title')
    Edit Foods
@endsection
@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="sub-title">Add Foods</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('storefoods') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Food Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="food_name" name="food_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Food Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="food_price" name="food_price">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Food Image</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="food_image" name="food_image">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Select Box</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="type_id" name="type_id">
                            <option value="opt1">Select Type ID</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->type_id }}"> {{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Thêm món ăn mới</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
