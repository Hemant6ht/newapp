<?php

namespace App\Http\Controllers\ModelControllers;

use App\Models\Orderdetail;
use Illuminate\Http\Request;

class orderdetailController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderdetail $orderdetail)
    {
        //
    }

    public static function saveOrderDetail($name,$address,$contact,$quant,$mop,$total_price,$pincode){
        $od = new Orderdetail();
        $od->quantity=$quant;
        $od->contact=$contact;
        $od->address=$address;
        $od->rcp_name=$name;
        $od->mop=$mop;
        $od->pincode=$pincode;
        $od->total_price=$total_price;
        $status = $od->save();
        if($status){
            return $od->orderdetail_pk;
        }
        return false;
        
    }
    public static function delete($orderdetail_pk){
        Orderdetail::destroy($orderdetail_pk);
    }
}
