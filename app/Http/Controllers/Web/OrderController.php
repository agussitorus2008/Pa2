<?php

namespace App\Http\Controllers\Web;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $userId = auth()->guard('web')->user()->id;
            $orders = Order::where('user_id', $userId)
                ->where(function ($query) use ($request) {
                    $query->where('total', 'like', '%' . $request->keyword . '%')
                        ->orWhere('status', 'like', '%' . $request->keyword . '%')
                        ->orWhere('code', 'like', '%' . $request->keyword . '%')
                        ->orWhere('payment', 'like', '%' . $request->keyword . '%');
                })
                ->latest()
                ->paginate(10);

            return view('pages.web.orders.list', compact('orders'));
        }

        return view('pages.web.orders.main');
    }


    public function show(Order $order)
    {
        return view('pages.web.orders.show', compact('order'));
    }
}
