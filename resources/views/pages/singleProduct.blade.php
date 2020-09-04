@extends('layouts/default2')

@section('title', '| Products')
<style>
    .product-section-images {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    grid-gap: 20px;
    margin-top: 5px;
}

.selected {
    border: 2px solid lightgray;
}

.product-section-thumbnail {
    display: flex;
    align-items: center;
    min-height: 50px;
    cursor: pointer;
    
}

.product-section-thumbnail:hover {
    border: 3px solid lightgray;
}

.product-section-image {
    display: flex;
    justify-content: center;
    align-content: center;
    border: 1px solid gray;
    padding: 30px;
    text-align: center;
    height: 250px; 
}

</style>
@section('content')
<div class="container mt-5">
    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif
</div>
    @foreach ($products as $product)
        <div class="container justify-content-center mt-5">
            <div class="container">
                <div class="row mb-5">     
                    <div class="col-md-5 col-lg-3 col-sm-2 col-xl-3">
                        <div class="card active product-section-image">
                            <img id="currentImage" class="card" src="{{ asset('images/welcome2.jpg') }}">
                        </div>
                        <div class="product-section-images">
                            <div class="product-section-thumbnail selected">
                                <img style="width: 40px; height: 40px" src="{{ asset('images/welcome3.jpg') }}">
                            </div>
                            <div class="product-section-thumbnail">
                                <img style="width: 40px; height: 40px" src="{{ asset('images/welcome4.jpg') }}">
                            </div>
                            <div class="product-section-thumbnail">
                                <img style="width: 40px; height: 40px" src="{{ asset('images/welcome6.jpg') }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
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

<script>
    (function() {
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.product-section-thumbnail');

        images.forEach((element) => element.addEventListener('click', thumbnailClick));

        function thumbnailClick(e) {
            currentImage.src = this.querySelector('img').src;

            currentImage.classList.remove('active');

            images.forEach((element) => element.classList.remove('selected'));
            this.classList.add('selected');
        }
    }());
</script>
@endsection

