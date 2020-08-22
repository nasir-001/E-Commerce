@include('includes/topnav')
    
    @if (Cart::isEmpty())
        <div class="container">
            <div class="card-body">
                <h1>No items in your cart</h1>
            </div>
        </div>
    @else
        {{-- {{ Cart::getCount() }} --}}
        <form action="{{ route('cart.empty') }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-outline-danger mt-5 float-right mr-5">Clear Cart</button>
        </form>
        <div class="container">
            <div class="card-body">
                <h2 class="mb-0">{{ $cartCollection->count() }} item(s) in your cart</h2>
            </div>
        </div>  
        @foreach ($cartCollection as $product)
            <div class="container mr-5 ml-5">
                <div class="card-body mt-2">
                    <hr>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="cols">
                                    <img src="{{ asset('images/welcome2.jpg') }}" width="80">
                                </div>
                                <div class="col-md-5">
                                    <h5 class="ml-3" style="color: gray">{{ $product->name }}</h5>
                                    <p style="color: gray">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <div class="cols">
                                    <form action="{{ route('cart.destroy', ['id' => $product->id]) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-link mr-2" style="color: gray">Remove</button>
                                    </form>
                                </div>
                                <div class="cols">
                                    <form action="">
                                        <input type="number" name="qty" class="form-control">
                                    </form>
                                </div>
                                <div class="col-md-2">
                                    NGN{{ $product->price }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            
        @endforeach

        <div class="container m-5">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem recusandae fugiat perspiciatis adipisci, vitae quia voluptatum itaque. Reiciendis, deserunt, fugiat quidem temporibus quam, eos distinctio ratione iusto aliquam officia inventore!
                    </div>
                    <div class="col-md-2">
                        <strong class="mr-0"> Total NGN </strong> <strong class="">{{ $totalPrice }}</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="/category" class="btn btn-outline-secondary mt-3">Continue Shopping</a>
                    </div>
                    <div class="col">
                        <form action="" method="POST">
                            <button type="submit" class="btn btn-outline-success mt-3">Proceed to Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endif    
@include('includes/footer')
