@extends('layouts.admin')

@section('content')
    <section class="section">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Admin Statistics</h2>
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
                                        Statistics
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card-style mb-30">
                        <div class="card-body">
                            <h4 class="mb-10">Total Users</h4>
                            <h3 class="text-bold mb-10">{{ $totalUsers }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card-style mb-30">
                        <div class="card-body">
                            <h4 class="mb-10">Total Orders</h4>
                            <h3 class="text-bold mb-10">{{ $totalOrders }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card-style mb-30">
                        <div class="card-body">
                            <h4 class="mb-10">Total Products</h4>
                            <h3 class="text-bold mb-10">{{ $totalProducts }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card-style mb-30">
                        <div class="card-body">
                            <h4 class="mb-10">Total Revenue</h4>
                            <h3 class="text-bold mb-10">{{ number_format($totalRevenue, 0, ',', '.') }}đ</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more statistics or charts as needed -->

        </div>
    </section>
@endsection
