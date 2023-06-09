@extends('frontend.layouts.admin.guruable-master.index')
@section('page_title')
    All Food
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Food </h4>
        <div class="card">
            <h5 class="card-header">Available Food Information</h5>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Food ID</th>
                            <th>Food Name</th>
                            <th>Food Money</th>
                            <th>Image</th>
                            <th>Type ID</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($foods as $food)
                            <tr>
                                <td>{{ $food->food_id }}</td>
                                <td>{{ $food->food_name }}</td>
                                <td>{{ $food->food_money }}</td>
                                <td>{{ $food->image }}</td>
                                <td>{{ $food->type_id }}</td>
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
