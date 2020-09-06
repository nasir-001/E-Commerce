<script src="{{ asset('js/app.js') }}" defer></script>
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
                        @if (auth()->user())
                            <input type="email" placeholder="Email address" name="email" value="{{ auth()->user()->email }}" class="form-control" readonly>
                        @else
                            <input type="email" placeholder="Email address" name="email" value="{{ old('email') }}" class="form-control" required>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Delivery Address" name="address" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" placeholder="First Name" name="first_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="second_name">Second Name</label>
                                <input type="text" placeholder="Second Name" name="last_name" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" placeholder="City" name="city" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="town">Town</label>
                                <input type="text" placeholder="Town" name="town" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="code">Postal\Zip Code</label>
                                <input type="text" placeholder="Postal or zip code" name="postalcode" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" placeholder="Phone number" name="phone" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    {{-- Hidden fields --}}
                    <input type="hidden" name="currency" value="NGN" />
                    <input type="hidden" name="country" value="NG" />
                    <input type="hidden" name="amount" value="{{ $total }}" />
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
                        <h5>0.14%</h5>
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
