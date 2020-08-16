@foreach ($cartContent as $product)
    {{ $product->name }}
    {{ $product->price }}
    {{ $product->quantity }}
    {{ $product->id }}
@endforeach    

