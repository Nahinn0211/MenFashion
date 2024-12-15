<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalOrders = Orders::count();
        $totalProducts = Products::count();
        $totalRevenue = Orders::sum('total_amount');

        return view('admin.statistics', compact('totalUsers', 'totalOrders', 'totalProducts', 'totalRevenue'));
    }
}
