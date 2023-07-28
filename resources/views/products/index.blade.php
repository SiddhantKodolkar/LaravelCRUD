<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Products</h1>
    <a href="{{route('products.create')}}">Create a new product</a>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Descripton</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)

            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->price*$product->qty}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('products.edit',['product'=>$product])}}">Edit</a></td>
                <td>
                    <form action="{{route('products.destroy',['product'=>$product])}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
