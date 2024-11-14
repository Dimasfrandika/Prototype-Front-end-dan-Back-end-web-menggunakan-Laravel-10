<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Create a Product</h1>
        <dive>
            @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>

            @endif
        </dive>
        <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Product Name" required />
            </div>

            <div class="form-group">
                <label>Qty</label>
                <input type="text" name="qty" placeholder="Qty" />
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" placeholder="Price" />
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" placeholder="Description" />
            </div>

            <div>
                <button type="submit">Save a New Product</button>
            </div>
        </form>
    </div>
</body>
</html>
