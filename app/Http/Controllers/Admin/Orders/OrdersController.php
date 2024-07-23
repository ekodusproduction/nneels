<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function getOrdersList(Request $request){
        try{
            $get_orders_list = Order::select('order_id', 'payment_status', 'updated_at', DB::raw('COUNT(*) AS order_count'), DB::raw('SUM(amount) AS total_amount'))
            ->groupBy('order_id', 'payment_status', 'updated_at')
            ->get();
            return view('admin.orders.orders-list')->with(['get_orders_list' => $get_orders_list]);
        }catch(\Exception $e){
            echo 'Oops! Something went wrong'.$e->getMessage();
        }
    }
}
