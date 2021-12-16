<?php

namespace App\Http\Controllers\ModelControllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController
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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public static function checkpresenceincart($userid,$pid){
        $check=Cart::all()->where('userId',$userid)->where('p_id',$pid);
        if($check->isEmpty()){
            return false;
        }
        return true;
    }

    public static function addproducttocart($userId,$pid){
        
        $cart = new Cart();
        $cart->userId=$userId;
        $cart->p_id=$pid;
        $check=Cart::all()->where('userId',$userId)->where('p_id',$pid);
        if($check->isEmpty()){
            $cart->save();
            return true;
        }
        return false;
    }
    public static function getAllProductInCart($userid){
        return Cart::all()->where('userId',$userid);
    }
    public static function TotalPrd($usrid){
        return Cart::all()->where('userId',$usrid)->count();
    }
    public static function deleteFromCart($userid,$pid){
        $status = Cart::all()->where('userId',$userid)->where('p_id',$pid)->count();
        if($status==0){
            return false;
        }else{
            $cart = Cart::all()->where('userId',$userid)->where('p_id',$pid)->first();
            DB::delete('delete from cart where userId = ? and p_id = ?', [$userid,$pid]);
            return true;
        }
    }
}
