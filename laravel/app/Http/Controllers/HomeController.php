<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function index()
    {
       // $products= Products_model::all(); //ini untuk ngambil model si produk dari databse model gituya
        return view('frontend.home');
    }

    public function shop()
    {
        //$products= Products_model::all(); //ini untuk ngambil model si produk dari databse model gituya
        //return view('frontend.shop', compact('products'));
    }

    public function tampilKategori($id)
    {
        // $category_products= Products_model::where('id_kategori', $id)->get();
        // $id_=$id;

        // return view('frontend.category_list_product', compact('category_products', 'id_')); //tadinya pake $id_ gatau kenapa ganti jadi '' hehhe
    }

    
    public function detailProduk($id){
        //$products=Products_model::findOrFail($id);
        // $products= DB::table('products')->where('id', $id)->get();//sintaks ini bakalan gak kefound karena pake DB::table jadinya tambahin use ya di atas
        // return view('frontend.product_detail', compact('products'));
    }
}
