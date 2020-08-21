@include('includes/topnav')

    @if (Cart::isEmpty())
        <h1>No items</h1>
        @else
        {{-- {{ Cart::getCount() }} --}}
        <form action="{{ route('cart.empty') }}" method="GET">
            <button type="submit" class="btn btn-outline-danger mt-5 float-right mr-5">Clear Cart</button>
        </form>
        
        @foreach ($cartCollection as $product)
            <div class="container m-5">
                <div class="card-body">
                    <hr>
                    <div class="row">
                        <div class="col-md-2 col-sm-2">

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="row">
                                <div class="cols">
                                    <img src="{{ asset('images/welcome2.jpg') }}" width="80">
                                </div>
                                <div class="col">
                                    <h5 class="ml-5">{{ $product->name }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            
        @endforeach

    @endif    
@include('includes/footer')
