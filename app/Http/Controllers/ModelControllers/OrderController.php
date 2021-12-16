<?php

namespace App\Http\Controllers\ModelControllers;
use Illuminate\Support\Facades\DB;

use App\Models\Order;
use Exception;
use Illuminate\Http\Request;

class OrderController
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    public static function saveorder($userid,$pid,$orderdetail_pk){
        $o = new Order();
        $o->userId = $userid;
        $o->p_id = $pid;
        $o->orderdetail_pk = $orderdetail_pk;
        try{
            $status =  $o->save();
        }catch(Exception $e){
            return false;
        }
        if($status){
            return $o->orderid;
        }
        return false;
    }

    public static function getAllOrder($userid){
        $data = DB::table('orders')->join('orderdetails','orders.orderdetail_pk','=','orderdetails.orderdetail_pk')->join('products','orders.p_id','=','products.p_id')->where('orders.userId',$userid)->get();
        return $data;
    }
}
