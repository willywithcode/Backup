<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\Product;
use App\Models\Statistic;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ordersCount = Order::count();
        $customersCount = User::count();
        $orders = Order::with('user')
            ->whereStatus(OrderStatus::PENDING)
            ->latest()->take(15)->get();
        $users = User::take(6)->get();
        $products = Product::withCount('orders')
            ->orderBy('orders_count', 'desc')
            ->having('orders_count', '!=', 0)
            ->take(15)->get();

        return view('dashboard', compact('ordersCount', 'customersCount', 'orders', 'users', 'products'));
    }

    public function sales(Request $request)
    {
        $from = $request->query('from');
        $to = $request->query('to');
        $dates = [];
        $data = [];

        $statistics = Statistic::whereBetween('date', [$from, $to])
            ->orderBy('date', 'ASC')->get();

        foreach ($statistics as $statistic) {
            $dates[] = $statistic->date;
            $data[] = $statistic->sales;
        }

        return response()->json(compact('dates', 'data'));
    }
}
