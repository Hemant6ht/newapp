<?php

namespace App\Http\Controllers\ModelControllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public static function getRandomProducts($num){
        return DB::table('products')->where('p_status',true)->inRandomOrder()->limit($num)->get();
    }
    public static function getLatestProducts($num){
        return DB::table('products')->where('p_status',true)->orderBy('p_id', 'DESC')->limit($num)->get(); 
    }
    public static function getAllProductsBycatid($catid){
        return Product::all()->where('cat_id',$catid)->where('p_status',true);
    }
    public static function getAllProductsBypid($pid){
        return Product::all()->where('p_id',$pid)->where('p_status',true)->first();
    }
    public static function getLatestProductsByCategory($catid,$num){
        return DB::table('products')->where('cat_id',$catid)->where('p_status',true)->orderBy('p_id', 'DESC')->limit($num)->get(); 
    }
}
