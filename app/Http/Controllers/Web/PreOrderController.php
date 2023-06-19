<?php

namespace App\Http\Controllers\Web;

use App\Models\Order;
use App\Helpers\Helper;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PreOrderController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        $order = new Order();
        $order->code = Helper::IDGenerator();
        $order->user_id = Auth::guard('web')->user()->id;
        $order->total = $product->price * $request->quantity;
        $order->status = 'preorder';
        $order->save();

        $order_detail = new OrderDetail();
        $order_detail->order_id = $order->id;
        $order_detail->product_id = $product->id;
        $order_detail->quantity = $request->quantity;
        $order_detail->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil menambahkan ke preorder',
        ]);
    }
}
