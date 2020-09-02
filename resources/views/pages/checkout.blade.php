@include('includes/topnav')

    <div class="container">
        <h1 class="mt-2 mb-5">Checkout</h1>
        <div class="row">
            <div class="col">
                <h4 class="mb-4 mt-2"><strong>Billing Details</strong></h4>
                <form method="POST" action="{{ route('pay') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" placeholder="Email address" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Delivery Address" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="second_name">Second Name</label>
                                <input type="text" placeholder="Second Name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" placeholder="City" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="town">Town</label>
                                <input type="text" placeholder="Town" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="code">Postal\Zip Code</label>
                                <input type="text" placeholder="Postal or zip code" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" placeholder="Phone number" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{-- Hidden fields --}}
                    <input type="hidden" name="amount" value="{{ Cart::getTotal() }}" /> <!-- Replace the value with your transaction amount -->
                    <input type="hidden" name="email" value="nasirlawal001@gmail.com" /> <!-- Replace the value with your customer email -->
                    <input type="hidden" name="address" value="No. Example" />
                    <input type="hidden" name="city" value="City" />
                    <input type="hidden" name="town" value="town" />
                    <input type="hidden" name="currency" value="NGN" />
                    <input type="hidden" name="country" value="NG" />
                    <input type="hidden" name="firstname" value="Oluwole" /> <!-- Replace the value with your customer firstname -->
                    <input type="hidden" name="lastname" value="Adebiyi" /> <!-- Replace the value with your customer lastname -->
                    <input type="hidden" name="phonenumber" value="090929992892" /> <!-- Replace the value with your customer phonenumber -->
                    <input class="btn btn-success" type="submit" value="Proceed to buy"  />
                </form>
            </div>
            <div class="col-md-5">
                <h4><strong>Your Order</strong></h4>
                @foreach(Cart::getContent() as $product)
                <hr>
                <div class="col">
                    <div class="row">
                        <div class="cols">
                            <a href="/product/{{ $product->id }}">
                                <img src="{{ asset('images/welcome2.jpg') }}" width="70">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/product/{{ $product->id }}">
                                <h5 style="display: inline; color: gray" class="ml-3 mt-0">{{ $product->name }}</h5>
                                <p class="ml-3">{{ $product->model->details }}</p>
                            </a>
                            <h5 class="ml-3">NGN {{ $product->price * $product->quantity }}</h5>
                        </div>
                        <strong class="mr-2 mt-3" style="width: 30px; height: 25px; border: 1px solid gray">{{ $product->quantity }}</strong>
                    </div>
                </div>
                @endforeach
                <hr>
                <div class="row">
                    <div class="col">
                        <h5>Total Items</h5>
                    </div>
                    <div class="col">
                        <h5>{{ Cart::getTotalQuantity() }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>Tax</h5>
                    </div>
                    <div class="col">
                        <h5>0%</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5><strong>Total</strong></h5>
                    </div>
                    <div class="col">
                        <h5><strong>NGN {{ Cart::getTotal() }}</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes/footer')

