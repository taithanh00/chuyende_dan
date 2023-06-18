@extends('frontend.layouts.admin.guruable-master.index')
@section('page_title')
    All Bill
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Bill </h4>
        <div class="card">
            <h5 class="card-header">Available Bill Information</h5>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Bill ID</th>
                            <th>Bill Day</th>
                            <th>Bill Time</th>
                            <th>Bill Total</th>
                            <th>Payment</th>
                            <th>Client ID</th>
                            <th>Order ID</th>
                            <th>Bill Detail ID</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($bills as $bill)
                            <tr>
                                <td>{{ $bill->bill_id }}</td>
                                <td>{{ $bill->bill_day }}</td>
                                <td>{{ $bill->bill_time }}</td>
                                <td>{{ $bill->bill_total }}</td>
                                <td>{{ $bill->payment }}</td>
                                <td>{{ $bill->client_id	 }}</td>
                                <td>{{ $bill->oder_id }}</td>
                                <td>{{ $bill->billdetail_id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div style="margin-top: 20px">
            {{ $categories->links()}}
        </div> --}}
            {{-- {{ $categories->links()}} --}}
            {{-- {{ $categories->withQueryString()->links() }} --}}
        </div>
    </div>
@endsection
