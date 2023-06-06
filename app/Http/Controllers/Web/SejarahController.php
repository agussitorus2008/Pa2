<?php

namespace App\Http\Controllers\Web;

use App\Models\Sejarah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $AllSejarah = Sejarah::latest()->paginate(1);
            return view('pages.web.sejarah.list', compact('AllSejarah'));
        }

        return view('pages.web.sejarah.main');
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
