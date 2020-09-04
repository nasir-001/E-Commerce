@extends('layouts/default')

@section('title', '| Products')
<style>
    .box {
        max-width: 150px;
    }
</style>
@section('content')

        <h1 class="text-center">{{ $category->name }}</h1>
        <div class="row mt-5 m-5">
            @foreach ($products as $product)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6"> 
                    <h4>{{ $product->name }}</h4>
                    <div class="well">
                        <a href="/product/{{ $product->id }}">
                            <div class="box">
                                <img class="shadow-lg"style="border: 3px solid lightgray" src="{{ asset('images/welcome2.jpg') }}" width="150px"><br>
                                {{ $product->details }}
                                <h5 class="mb-5" style="color: black; background: lightgray; width: 100px">NGN {{ $product->price }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach   
        </div>
        {{  $products->links()  }}

@endsection