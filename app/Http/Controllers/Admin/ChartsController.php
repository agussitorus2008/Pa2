<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get data total account group by day
        // $orders = DB::table('orders')
        //     ->selectRaw('COUNT(*) as total, DAYNAME(created_at) as day_name')
        //     ->groupBy(DB::raw('DAY(created_at)'))
        //     ->get()->toArray();

        // $data = [];

        // foreach ($orders as $row) {
        //     $data['label'][] = $row->day_name;
        //     $data['data'][] = (int) $row->total;
        // }
        // // dd($data);

        // return view('pages.admin.charts.main', compact('data'));

        $orders = DB::table('orders')
            ->selectRaw("
        COUNT(*) as total,
        DAYNAME(created_at) as day_name,
        SUM(CASE WHEN status = 'accepted' THEN 1 ELSE 0 END) as accepted,
        SUM(CASE WHEN status = 'rejected' THEN 1 ELSE 0 END) as rejected
    ")
            ->groupBy(DB::raw('DAY(created_at)'))
            ->get()
            ->toArray();

        $data = [];

        foreach ($orders as $row) {
            $data['label'][] = $row->day_name;
            $data['data'][] = (int) $row->total;
            $data['accepted'][] = (int) $row->accepted;
            $data['rejected'][] = (int) $row->rejected;
        }

        return view('pages.admin.charts.main', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
