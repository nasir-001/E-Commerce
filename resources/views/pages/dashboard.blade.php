@extends('layouts/default')

@section('title', '| Dashboard')

@section('content')
        <div class="row mt-5 m-5">
            @foreach ($products as $product)
                <div class="cols m-4 shadow-lg product"> 
                    <a href="/product/{{ $product->id }}">
                        <h4 class="text-center">{{ $product->name }}</h4>
                        <img src="{{ asset('images/welcome2.jpg') }}" width="150px">
                        <br>
                        <small>{{ $product->details }}</small><br>
                        <h6 class="float-right mr-1">&dollar; {{ $product->price }}</h6>
                    </a>
                </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
</div>

@endsection
