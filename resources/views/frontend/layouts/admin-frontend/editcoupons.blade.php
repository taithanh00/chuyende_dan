@extends('frontend.layouts.admin.guruable-master.index')
@section('page_title')
    Edit Coupons
@endsection
@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="sub-title">Add Coupons</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('storecoupons') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Coupon Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="coupon_name" name="coupon_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Coupon Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="coupon_code" name="coupon_code">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Coupon Validate</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="coupon_validate" name="coupon_validate">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Thêm mã giảm giá mới</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
