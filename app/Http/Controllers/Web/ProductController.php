<?php

namespace App\Http\Controllers\Web;

use App\Models\product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $products = product::where('nama', 'like', '%' . $request->keyword . '%')->paginate(4);

    //         return view('pages.web.product.list', compact('products'));
    //     }
    //     return view('pages.web.product.main');
    // }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::where('nama', 'like', '%' . $request->keyword . '%')->paginate(4);
            return view('pages.web.product.list', compact('products'));
        }

        $orderDetails = OrderDetail::with('product')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->select('order_details.product_id', DB::raw('count(*) as total'))
            ->where('orders.status', 'accepted')
            ->groupBy('order_details.product_id')
            ->orderByDesc('total')
            ->first();

        $product = null;

        if ($orderDetails) {
            $product = $orderDetails->product;
        }

        return view('pages.web.product.main', compact('product'));
    }


    public function show(product $product)
    {
        return view('pages.web.product.show', [
            'product' => $product,
        ]);
    }
}
