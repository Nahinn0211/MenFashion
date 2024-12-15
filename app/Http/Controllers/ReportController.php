<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $startOfWeek = Carbon::now()->startOfWeek();
        $startOfMonth = Carbon::now()->startOfMonth();

        $dailyRevenue = Orders::whereDate('created_at', $today)->sum('total_amount');
        $weeklyRevenue = Orders::where('created_at', '>=', $startOfWeek)->sum('total_amount');
        $monthlyRevenue = Orders::where('created_at', '>=', $startOfMonth)->sum('total_amount');

        $topSellingProducts = Products::withCount('orderDetails')
            ->orderBy('order_details_count', 'desc')
            ->take(5)
            ->get();

        return view('admin.report', compact('dailyRevenue', 'weeklyRevenue', 'monthlyRevenue', 'topSellingProducts'));
    }
}
