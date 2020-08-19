@extends('layouts/default')

@section('title', '| Products')
@section('content')

        <h1 class="text-center">{{ $category->name }}</h1>
        <div class="row mt-5 m-5">
            @foreach ($products as $product)
                <div class="cols m-4 shadow-lg product product-box"> 
                    <a href="/product/{{ $product->id }}">
                        <h4 class="text-center">{{ $product->name }}</h4>
                        {{-- <img src="{{ url('public/storage/2020/'.$product['image']) }}" /> --}}
                        <img src="/sotrage/2020/08/18/{{ $product->image }}"/>
                        <br>
                        <small class="text-center">{{ $product->details }}</small>
                        <br>
                        <h6 class="float-right mr-1">&dollar; {{ $product->price }}</h6>
                    </a>
                </div>
            @endforeach   
        </div>
        {{  $products->links()  }}

@endsection