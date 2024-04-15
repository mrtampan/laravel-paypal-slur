<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Paypal Integration</title>
</head>

<body>
    <h2>Product: Laptop</h2>
    <h3>Price: $5</h3>

    <form action="{{ route('paypal')}}" method="post">
        @csrf
        <input type="hidden" name="price" value="5">
        <input type="hidden" name="product_name" value="laptop">
        <input type="hidden" name="quantity" value="1">
        <button type="submit">Pay with Paypal</button>
    </form>
</body>

</html>