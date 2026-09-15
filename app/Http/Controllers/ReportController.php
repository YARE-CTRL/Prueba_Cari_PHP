<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class ReportController extends Controller
{
    public function index()
    {
        $reportData = Order::select(
                'products.name as product_name',
                'products.reference',
                DB::raw('SUM(orders.quantity) as total_quantity'),
                DB::raw('SUM(orders.total) as total_revenue')
            )
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->groupBy('products.id', 'products.name', 'products.reference')
            ->orderBy('total_revenue', 'desc')
            ->get();

        return view('report', compact('reportData'));
    }
}
