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
	  // $this->addToOrdersTables($request, null);
	  

    Rave::initialize(route('callback'));
  }

// protected function addToOrdersTables($request, $error)
//   {
// 	$order = Order::create([
// 		'user_id' => auth()->user() ? auth()->user()->id : null,
// 		'billing_email' => $request->email,
// 		'billing_first_name' => $request->first_name,
// 		'billing_last_name' => $request->last_name,
// 		'billing_address' => $request->address,
// 		'billing_city' => $request->city,
// 		'billing_town' => $request->town,
// 		'billing_postalcode' => $request->postalcode,
// 		'billing_phone' => $request->phone,
// 		'billing_total' => Cart::getTotal(),
// 		'error' => $error,
  
// 	  ]);
  
// 	  foreach (Cart::getContent() as $item) 
// 		{
		  
// 		  OrderProduct::create([
// 			'order_id' => $order->id,
// 			'product_id' => $item->model->id,
// 			'quantity' => $item->quantity,
// 		  ]);
// 		}
//   }
  
  /**
   * Obtain Rave callback information
   * Display a listing of the resource.
   * @param Illuminate\Http\Request  $request
   * @return void
   */
  public function callback(Request  $request)
  {
    $resp = $request->resp;
    $body = json_decode($resp, true);
    $txRef = $body['data']['data']['txRef'];
    $data = Rave::verifyTransaction($txRef);
    
    // Check for conditions here if transaction amount is paid then return addToOrdersTables else do something else
    return redirect()->route('success');   

  }
  
  protected function addToOrdersTables(Request $request)
  { 
    
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
  }
}
