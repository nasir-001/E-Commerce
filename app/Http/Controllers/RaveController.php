<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\OrderProduct;
use Cart;
use Rave;

class RaveController extends Controller
{
    /**
   * Initialize Rave payment process
   * @return \Illuminate\Http\Response
   * @param  \Illuminate\Http\Request  $request
   * @return void
   */
  public function initialize(Request  $request)
  {
    //This initializes payment and redirects to the payment gateway
	//The initialize method takes the parameter of the redirect URL
    Rave::initialize(route('callback'));
  }

  /**
   * Obtain Rave callback information
   * Display a listing of the resource.
   * @param Illuminate\Http\Request  $request
   * @return void
   */
  public function callback(Request  $request)
  {

    // $data = Rave::verifyTransaction(request()->txref);

    $resp = $request->resp;
    $body = json_decode($resp, true);
    $txRef = $body['data']['data']['txRef'];
    $data = Rave::verifyTransaction($txRef);

	dd($data);
	
    $order = Order::create([
        'user_id' => auth()->user() ? auth()->user()->id : null,
        'billing_email' => $request->email,
        'billing_first_name' => $request->first_name,
        'billing_last_name' => $request->last_name,
        'billing_address' => $request->address,
        'billing_city' => $request->city,
        'billing_town' => $request->town,
        'billing_postalcode' => $request->postalcode,
        'billing_phone' => $request->phone,
        'billing_total' => Cart::getTotal(),
        'error' => null,
  
      ]);

      foreach (Cart::getContent() as $item) 
      {
        OrderProduct::create([
          'order_id' => $order->id,
          'product_id' => $item->model->id,
          'quantity' => $item->quantity,
        ]);
      }
    
    return redirect()->route('empty');

  }
}
