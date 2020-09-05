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
   * @return void
   */
  public function callback()
  {

    $data = Rave::verifyTransaction(request()->txref);

    // Insert into orders table 
    $order = Order::Create([
      'user_id' => auth()->user() ? auth()->user()->id : null,
      'billing_first_name' => $request->first_name,
      'billing_last_name' => $request->second_name,
      'billing_email' => $request->billing_email,
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
        'order_id' => $order_id,
        'product_id' => $item_id,
        'quantity' => $item->quantity,
      ]);
    }

    // Insert into order_product table

    dd($data);
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Comfirm that the transaction is successful
        // Confirm that the chargecode is 00 or 0
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (includeing parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

  }
}
