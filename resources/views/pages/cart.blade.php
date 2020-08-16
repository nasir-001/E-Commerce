@if (Cart::isEmpty() > 0)
    <h1>No items</h1>
    @else

    @foreach ($cartCollection as $product)
        {{ $product->name }}<br>
        {{ $product->price }}<br>
        {{ $product->id }}
    @endforeach
@endif