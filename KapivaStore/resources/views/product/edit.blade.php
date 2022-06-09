@extends('layouts.store')

@section('content')
<form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form">

        <label for="name">Nome do Produto:</label>
        <input type="text" name="name" class="form-control" value="{{$product->name}}">
        <label for="description">Descrição:</label>
        <input type="text" class="form-control" name="description"  value="{{$product->description}}">
        <label for="price">Preço: </label>
        <input type="number" class="form-control" step="0.1" name="price"  value="{{$product->price}}">
        <label for="stock">Estoque: </label>
        <input type="number" class="form-control" name="stock"  value="{{$product->stock}}">
        <label for="image">Imagem: </label>
        <input type="file" class="form-control" name="image">
        <label for="category_id">Selecione uma Categoria:</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{$category->id}}"
                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}</option>
                @endforeach
            </select>
            <label for="tags[]">Selecione as Tags</label>
            <select multiple name="tags[]" class="form-control">
                @foreach($tags as $tag)
                <option value="{{$tag->id}}"
                    {{ $product->hasTag($tag->id) ? 'selected' : '' }}
                    >{{$tag->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>
            @endsection
