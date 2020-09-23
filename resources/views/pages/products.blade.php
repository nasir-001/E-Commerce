@extends('layouts/default')

@section('title', '| Products')
<style>
    .box {
        max-width: 150px;
    }
    @media (max-width: 1000px) {
        img {
            width: 100px;
        }
    }
</style>
@section('content')

    <div class="row ml-5 mt-5">
        @foreach ($products as $product)
            <div class="col-lg-3 col-md-3 col-sm-4"> 
                <h5>{{ $product->name }}</h5>
                <div class="well">
                    <a href="/product/{{ $product->id }}">
                        <div class="box">
                            <img class="shadow-lg"style="border: 3px solid lightgray" src="{{ asset('images/welcome2.jpg') }}" width="150px"><br>
                            {{-- <img src="{{ asset('storage/2020') }}"> --}}
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