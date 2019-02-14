<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('display')}}" method="post">
    @csrf
    <h1>Product Discount Calculator</h1>
    <label>Product Description</label>
    <input type="text" name="description">
    <label>List Price</label>
    <input type="number" name="price">
    <label>Discount Percent</label>
    <input type="number" name="percent">
    <button type="submit">Calculate Discount</button>
</form>
</body>
</html>