@extends('layouts/default2')

@section('title', '| Products')
@section('content')

    @foreach ($products as $product)
        <div class="container justify-content-center mt-5">
                <div class="row mb-5">
                    <div class="cols">
                        <div class="card-body border ml-5 content-cell shadow-lg">
                            <img src="{{ asset('images/welcome2.jpg') }}">
                        </div>
                    </div>
                    
                    <div class="col ml-5">
                        <h2>{{ $product->name }}</h2>
                        <h4 class="mt-4">{{ $product->details }}</h4>
                        <h2 class="mt-4">NGN {{ $product->price }}</h2>
                        <p>{{ $product->description }}</p>
                        <p>&nbsp;</p>
                        
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="details" value="{{ $product->details }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">           
                            <a href="/category" class="btn btn-outline-secondary">shopping</a>
                            <button type="submit" class="btn btn-outline-success">Add to Cart</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endforeach

@endsection