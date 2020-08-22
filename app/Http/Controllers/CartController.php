<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Cart;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cartCollection = Cart::getContent();
        $totalPrice = Cart::getTotal();
        $totalCount = Cart::getTotalQuantity();
        return view('pages.cart')->with([
            'totalCount' =>  $totalCount,
            'cartCollection' => $cartCollection,
            'totalPrice' => $totalPrice
        ]);
    }
    
    public function empty ()
    {
        Cart::clear();
        return redirect()->back()->with('success_message', 'Your cart is now empty');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Cart::add($request->id, $request->name, $request->price, 1, array())->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
        
    }
    // return view('pages.cart')->with([
    //     'cartItem' => $cartItem,
    //     'cartContent' => $cartContent
    // ]);
    

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
        Cart::remove($id);
        return redirect()->back();
    }
}
