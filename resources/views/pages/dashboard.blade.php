@extends('layouts/default')

@section('title', '| Dashboard')

@section('content')
        <div class="row mt-5 m-5">
            @foreach ($products as $product)
                <div class="cols m-4 shadow-lg product"> 
                    <a href=""><img src="{{ asset('images/welcome2.jpg') }}" width="150px">
                        <br>
                        <h4>{{ $product->name }}</h4>
                    </a>
                </div>
            @endforeach
        </div>
        {{-- {{ $products->links() }} --}}
    </div>
</div>

@endsection
