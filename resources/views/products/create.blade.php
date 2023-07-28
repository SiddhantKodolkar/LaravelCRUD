<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        @method('POST')
        <div>
            Name:<input type="text" name="name" placeholder="Name">
        </div>
        <div>
            Qty:<input type="text" name="qty" placeholder="Quantity">
        </div>
        <div>
            Price:<input type="number" name="price" placeholder="Price">
        </div>
        <div>
            Description:<input type="text" name="description" placeholder="Description">
        </div>
        <button type="submit">Save Product</button>
    </form>
</body>
</html>