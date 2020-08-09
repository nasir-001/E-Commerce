@extends('layouts/default')

@section('title', '| Dashboard')

@section('content')
        <div class="row mt-5 m-5">
            @foreach ($products as $product)
                <div class="cols m-4 shadow-lg product"> 
                    <a href="">
                        <h4>{{ $product->name }}</h4>
                        <img src="{{ asset('images/welcome2.jpg') }}" width="150px">
                        <br>
                        <small>{{ $product->details }}</small>
                    </a>
                </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
</div>

@endsection
