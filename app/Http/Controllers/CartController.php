<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\Validator;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // dd(Cart::getTotalQuantity());
        $cartCollection = Cart::getContent();
        $totalPrice = Cart::getTotal();
        $item = Cart::getTotalQuantity();
        return view('pages.cart')->with([
            'cartCollection' => $cartCollection,
            'totalPrice' => $totalPrice,
            'item' => $item
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
        $productId = $request->id;
        $duplicates = Cart::get($productId);
        if ($duplicates) {
            return redirect()->back()->with('success_message', 'Item is already in your cart');
        }
        Cart::add($request->id, $request->name, $request->price, 1, array())->associate('App\Product');
        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
        
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
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,100'
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 100.']));
            return response()->json(['success' => false], 400);
        }

        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            )
        ));

        session()->flash('success_message', 'Quantity was updated successfully');
        return response()->json(['success' => true]);
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

     /**
     * Switch item for shopping cart to save for later.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
