@extends('layouts/default')

@section('title', '| Dashboard')
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
        <div class="row ml-5 mt-5 mr-2">
            @forelse ($products as $product)
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4"> 
                    <h5>{{ $product->name }}</h5>
                    <div class="well">
                        <a href="/product/{{ $product->id }}">
                            <div class="box">
                                {{-- <img class="shadow-lg" style="border: 3px solid lightgray" src="{{ asset('images/welcome2.jpg') }}" width="150px"><br> --}}
                                <img class="shadow-lg"style="border: 3px solid lightgray" src="{{ $product->image }}" width="150px">
                                {{ $product->details }}
                                <h5 class="mb-4" style="color: black; background: lightgray; width: 100px">NGN {{ $product->price }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="container mt-5">
                    <div class="row fill-viewport align-items-start">
                        <div class="col-12 col-md-6 mx-auto mt-5">
                            <h1 class="text-dark display-2">Ooops</h1>
                            <p class="lead pb-3">There are no products yet. &#128064;</p>   
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        {{ $products->links() }}
    </div>
</div>

@endsection
