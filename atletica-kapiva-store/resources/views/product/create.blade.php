<div>
    {{ session()->get('success')}}
</div>
@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/productForm">
    <title>Kapiva Store</title>
</head>
<body>
    <div>
        <form action="{{route('product.store')}}" method="POST">
            @csrf
            Nome do produto<input type="text" name="name">
            Decrição:<input type="text" name="description">
            Preço:<input type="number" step=".01" name="price">
            Estoque:<input type="number" step=".01" name="stock">

            Imagem: <input type="image">

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
@endsection
