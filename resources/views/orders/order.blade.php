@extends('platform::dashboard')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
     /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #0389f6;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
} 
</style>
@section('title',__('Oder details'))
@section('description', __('All information for this order'))

@section('navbar')
    
@stop

@section('content')

    <div class="admin-wrapper py-3">
		
        <div class="row {{ $order->shipped ? 'alert-info' : '' }}">
            <div class="col">
                <div class="container">
                    <div class="container mt-5">
						<div class="row fill-viewport align-items-start">
						  <div class="col-12 col-md-6 mx-auto text-center">
							<h1 class="text-dark display-4">Order Details</h1>
						  </div>
						</div>
					  </div>
                        @foreach ($products as $product)           
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Product Id:</th>
                                    <th scope="col">Product Name:</th>
                                    <th scope="col">Product Price:</th>
                                    <th scope="col">Product Quantity:</th>
                                
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                    
                                </tr>
                                </tbody>
                            </table>
                            <div class="mt-3"></div>
                        @endforeach
						<div class="container mt-5">
							<div class="row fill-viewport align-items-start">
								<div class="col-12 col-md-6 mx-auto text-center">
								<h1 class="text-dark display-4">Customer Details</h1>
								</div>
							</div>
						</div>  
						<ul class="list-group">
							<h5 for="">Customer First Name:</h5>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->billing_first_name }}</li></h4>
							<h5 for="">Customer Last Name:</h5>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->billing_last_name }}</li></h4>
							<h5 for="">Customer Email:</h5>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->billing_email }}</li></h4>
							<h5 for="">Delivery Address:</h5>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->billing_address }}</li></h4>
							<h5 for="">Customer City:</h5>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->billing_city }}</li></h4>
							<h5 for="">Customer Town:</h5>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->billing_town }}</li></h4>
							<h5 for="">Customer Zip Code:</h5>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->billing_postalcode }}</li></h4>
							<h5 for="">Customer Phone:</h5>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->billing_phone }}</li></h4>
							<h4 for="">Amount Paid:</h4>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->billing_total }}</li></h4>
							<h4 for="">Order Time:</h4>
							<h4><li class="list-group-item mt-2 mb-2">{{ $order->created_at }}</li></h4>
						</ul>
							
						
                </div>
            </div>
        </div>
    
        <form action="{{ route('order.update', ['id'=>$order->id]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col m-5">
                    Shipped<br>
                    <label class="switch">
                        <input name="shipped" type="checkbox" required>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col mt-3">
					<button style="width: 60px" class="btn btn-outline-primary m-5">Save</button> 
                </div>
            </div>
        </form>
            
    </div>

@stop




