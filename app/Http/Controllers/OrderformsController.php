<?php

namespace App\Http\Controllers;

use App\Models\Orderforms;
use Illuminate\Http\Request;

class OrderformsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orderforms');
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
        $request->validate([
            'fullname' => 'required',
            'phone-number' => 'required|digits:11|numeric',
            'email' => 'required|email',
            'delivery-address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip-code' => 'required',
            'deadline' => 'required',
            'product-name' => 'required',
            'quantity' => 'required',
            'special-instructions' => 'required'


        ]);

        Orderforms::create($request->all());

        return redirect()->back()
                         ->with(['success' => 'Your order has been placed. Thank You!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orderforms  $orderforms
     * @return \Illuminate\Http\Response
     */
    public function show(Orderforms $orderforms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderforms  $orderforms
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderforms $orderforms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orderforms  $orderforms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orderforms $orderforms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderforms  $orderforms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderforms $orderforms)
    {
        //
    }
}
