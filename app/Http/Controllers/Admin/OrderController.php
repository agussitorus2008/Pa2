<?php

namespace App\Http\Controllers\Admin;

use App\Models\product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Notification;
use App\Http\Controllers\Controller;
use PDF;

use App\Exports\OrdersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $orders = Order::where('total', 'like', '%' . $request->keyword . '%')
                ->orWhere('status', 'like', '%' . $request->keyword . '%')
                ->orWhere('user_id', 'like', '%' . $request->keyword . '%')
                ->orWhere('code', 'like', '%' . $request->keyword . '%')
                ->orWhere('payment', 'like', '%' . $request->keyword . '%')
                ->latest()->paginate(10);
            return view('pages.admin.orders.list', compact('orders'));
        }
        return view('pages.admin.orders.main');
    }
    

    public function show(Order $order)
    {
        return view('pages.admin.orders.show', compact('order'));
    }

    public function accept(Order $order)
    {
        $notification = new Notification;
        $notification->user_id = $order->user_id;
        $notification->message = 'Pesanan anda dengan kode ' . $order->code . ' Diterima!';
        $notification->type = 'success';
        $notification->save();

        $order->status = 'accepted';
        $order->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil Diterima',
        ]);
    }

    public function reject(Order $order)
    {
        $notification = new Notification;
        $notification->user_id = $order->user_id;
        $notification->message = 'Pesanan anda dengan kode ' . $order->code . ' Ditolak!';
        $notification->type = 'warning';
        $notification->save();

        $order->status = 'rejected';
        $order->save();
        $order_details = OrderDetail::where('order_id', $order->id)->get();
        foreach ($order_details as $item) {
            $product = product::find($item->product_id);
            $product->stock = $product->stock + $item->quantity;
            $product->update();
        }

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesanan berhasil ditolak',
        ]);
    }
    public function pdf()
    {
        $orders = Order::orderBy('created_at', 'DESC')->get();
        $pdf = PDF::loadView('pages.admin.orders.pdf', ['orders' => $orders]);
        return $pdf->download($orders->first()->code . '-' . $orders->first()->created_at->format('d-m-Y') . '.pdf');
    }


    // public function excel(Order $order)
    // {
    //     return view('pages.admin.orders.excel', compact('orders'));
    // }
    // public function downloadexcel()
    // {
    //     $orders = Order::orderBy('created_at', 'DESC')->get();
    //     $fileName = $orders->first()->code . '-' . $orders->first()->created_at->format('d-m-Y') . '.xlsx';
    //     return Excel::download(new OrdersExport($orders), $fileName);
    // }
}
