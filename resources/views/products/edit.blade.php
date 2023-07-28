<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{route('products.update',['product'=>$product])}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            Name:<input type="text" name="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            Qty:<input type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}">
        </div>
        <div>
            Price:<input type="number" name="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            Description:<input type="text" name="description" placeholder="Description" value="{{$product->description}}">
        </div>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>