<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Edit Product: {{ $product->name }}</h1>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        
        
        <form method="post" action="{{route('product.update', ['product' => $product])}}">
            @csrf
            @method('PUT')

            <div 
                <label>name</label>
                <input type="text" name="name" placeholder="name" value="{{$product->name"/>
            </div>

            <div 
                <label>Qty</label>
                <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}"/>
            </div>

            <div> 
                <label>price</label>
                <input type="text" name="price" placeholder="Price" value="{{$product->price}}"/>
            </div>

            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="Description" value="{{$product->description}}"/>
            </div>

            <div>
                <input type="submit" value="Update" />
            </div>
        </form>
    </div>>
</body>
</html>