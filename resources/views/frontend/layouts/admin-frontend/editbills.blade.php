@extends('frontend.layouts.admin.guruable-master.index')
@section('page_title')
    Edit Bills
@endsection
@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="sub-title">Edit Bills</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('storebills') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bill Day</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="bill_day" name="bill_day">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bill Time</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="bill_time" name="bill_time">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bill Total</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="bill_total" name="bill_total" placeholder="Price">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Select Client</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="client_id" name="client_id">
                            <option value="opt1">Select Client ID</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->client_id }}"> {{ $client->client_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Select Order</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="oder_id" name="oder_id">
                            <option value="opt1">Select Order ID</option>
                            @foreach ($orders as $order)
                                <option value="{{ $order->oder_id }}"> {{ $order->oder_status }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Select Bill Detail</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="oder_id" name="oder_id">
                            <option value="opt1">Select Bill Detail</option>
                            @foreach ($bill_details as $bill_detail)
                                <option value="{{ $bill_detail->billdetail_id }}"> {{ $bill_detail->bd_quantity }}</option>
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
