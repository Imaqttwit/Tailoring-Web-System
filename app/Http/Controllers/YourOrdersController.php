<?php

namespace App\Http\Controllers;

use App\Models\YourOrders;
use Illuminate\Http\Request;

class YourOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('YourOrders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\YourOrders  $yourOrders
     * @return \Illuminate\Http\Response
     */
    public function show(YourOrders $yourOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\YourOrders  $yourOrders
     * @return \Illuminate\Http\Response
     */
    public function edit(YourOrders $yourOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\YourOrders  $yourOrders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YourOrders $yourOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\YourOrders  $yourOrders
     * @return \Illuminate\Http\Response
     */
    public function destroy(YourOrders $yourOrders)
    {
        //
    }
}
