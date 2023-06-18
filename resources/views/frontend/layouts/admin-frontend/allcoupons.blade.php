@extends('frontend.layouts.admin.guruable-master.index')
@section('page_title')
    All Coupons
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Bill </h4>
        <div class="card">
            <h5 class="card-header">Available Coupons Information</h5>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Coupon ID</th>
                            <th>Coupon Name</th>
                            <th>Coupon Code</th>
                            <th>Coupon Validate</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($coupons as $coupon)
                            <tr>
                                <td>{{ $coupon->id }}</td>
                                <td>{{ $coupon->coupon_name }}</td>
                                <td>{{ $coupon->coupon_code }}</td>
                                <td>{{ $coupon->coupon_validate }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
