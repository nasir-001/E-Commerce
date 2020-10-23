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
<input class="form-checkbox" type="checkbox" name="">
        <div class="flex mb-4 flex-wrap -px-2">

            @forelse ($products as $product)
                <div class="mb-6 sm:px-3 w-1/2 px-2 sm:w-1/2 md:w-1/3 lg:w-1/4 flex flex-col">
                    <div class="bg-white rounded-lg overflow-hidden shadow-xl hover:bg-gray-100 hover:shadow-2xl">
                        <div class="flex-1 flex flex-col">
                            <div class="p-2 flex-1 flex flex-col justify-between">
                                <a href="/product/{{ $product->id }}">
                                    <div class="rounded-lg">
                                        <img class="bg-cover h-40 rounded-lg w-full"  src="{{ asset('images/welcome5.jpg') }}">
                                    </div>
                                    <div class="">
                                        <p class="ml-2 truncate text-gray-800">{{ $product->details }}</p>
                                    </div>
                                    <div class="">
                                        <p class="ml-2 text-gray-800">{{ $product->name }}</p>
                                    </div>
                                </a>
                                <div>
                                    <h1 class="ml-2 font-semibold text-xl text-gray-700">NGN 100</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="mx-auto mt-5">
                    <div class="text-center">
                        <div class="text-6xl font-hairline mt-5">
                            <h1>Ooops</h1>
                        </div>
                        <div class="text-3xl font-hairline">
                            <p>There are no products yet. &#128064;</p>   
                        </div>
                    </div>
                </div>
            @endforelse
            </div>
            {{ $products->links() }}
        </div>
        
    </div>
</div>

@endsection
