@include('includes/topnav')
    
    @if (Cart::isEmpty())
        <div class="container">
            <div class="card-body">
                <h1>No items in your cart</h1>
                <a href="/category" class="btn btn-outline-info">Continue Shopping</a>
            </div>
        </div>
    @else
    
        <form action="{{ route('cart.empty') }}" method="GET">
            @csrf
            <div class="container">
                @if(session()->has('empty_message'))
                    <div class="alert alert-success">
                        {{ session()->get('empty_message') }}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-outline-danger mt-5 float-right mr-5">Clear Cart</button>
        </form>
        <div class="container">
            <div class="card-body">
                <h2 class="mb-0">{{ $cartCollection->count() }} item(s) in your cart</h2>
            </div>
        </div>
        <div class="container">
            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif
        </div>
        @foreach ($cartCollection as $product)  
            <div class="container mr-5 ml-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <hr>
                            <div class="row">
                                <div class="cols">
                                    <a href="/product/{{ $product->id }}">
                                        <img src="{{ asset('images/welcome2.jpg') }}" width="80">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-2 col-xl-3 mt-3">
                                    <a href="/product/{{ $product->id }}">
                                        <h5 style="color: gray">{{ $product->name }}</h5>
                                        <p style="color: gray">{{ $product->model->details }}</p>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-2 col-xl-3 mt-3">
                                    <form action="{{ route('cart.destroy', ['id' => $product->id]) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-link mr-2" style="color: red">Remove</button>
                                    </form>
                                </div>
                                <div class="cols mt-3">
                                    <form action="">
                                        <select data-id="{{ $product->id }}" class="quantity form-control">
                                            @for($i = 1; $i < 100 + 1; $i++)
                                                <option {{ $product->quantity == $i ? 'selected' : '' }}>{{ $i }}</option>    
                                            @endfor
                                        </select>
                                    </form>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xl-3 mt-3">
                                    NGN {{ $product->price * $product->quantity}}
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <a href="{{ route('checkout.index') }}" class="btn btn-outline-success mt-3">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>

    @endif    

@include('includes/footer')

<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function(){
        const classname = document.querySelectorAll('.quantity')

        Array.from(classname).forEach(function (element) {
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id')
                axios.patch(`/cart/${id}`, {
                    quantity: this.value
                })
                .then(function (response) {
                    window.location.href = '{{ route('cart.index') }}'
                })
                .catch(function error(error) {
                    window.location.href = '{{ route('cart.index') }}'
                });
            })
        })
    })();
</script>
