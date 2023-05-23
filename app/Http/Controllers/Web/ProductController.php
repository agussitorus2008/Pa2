<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = product::where('nama', 'like', '%' . $request->keyword . '%')->paginate(4);

            return view('pages.web.product.list', compact('products'));
        }
        return view('pages.web.product.main');
    }

    public function show(product $product)
    {
        return view('pages.web.product.show', [
            'product' => $product,
        ]);
    }
}
