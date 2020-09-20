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
	// $custumerData = $request->all();
	$this->addToOrdersTables($request, null);
	
    Rave::initialize(route('callback'));
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
  
  /**
   * Obtain Rave callback information
   * Display a listing of the resource.
   * @param Illuminate\Http\Request  $request
   * @return void
   */
		
	public function callback(Request  $request, $id)
	{

		$json = json_decode($request->resp);
		
		$payload = Rave::verifyTransaction($json->data->data->txRef);
		
		
		if ($payload->data->chargedamount > 0 )
		{
			Cart::clear();
			$order = Order::find($id);
			$order->error = "None";
			$order->save();
			return redirect()->route('thankyou');

		} else {

			$order = Order::find($id);
			$order->error = "Payment not verified";
			$order->save();
			return redirect()->route('sorry');
		}

	}

}
