@extends('layouts.admin')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Admin Report</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('admin.dashboard')}}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Report
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card-style mb-30">
                        <div class="card-body">
                            <h4 class="mb-10">Daily Revenue</h4>
                            <h3 class="text-bold mb-10">{{ number_format($dailyRevenue, 0, ',', '.') }}đ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card-style mb-30">
                        <div class="card-body">
                            <h4 class="mb-10">Weekly Revenue</h4>
                            <h3 class="text-bold mb-10">{{ number_format($weeklyRevenue, 0, ',', '.') }}đ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card-style mb-30">
                        <div class="card-body">
                            <h4 class="mb-10">Monthly Revenue</h4>
                            <h3 class="text-bold mb-10">{{ number_format($monthlyRevenue, 0, ',', '.') }}đ</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="card-body">
                            <h4 class="mb-20">Top Selling Products</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Sales Count</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($topSellingProducts as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->order_details_count }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
