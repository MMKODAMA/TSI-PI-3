@extends('layouts.store')
@section('content')

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" style="margin-bottom: 20px; height: 100%;">
        @csrf
        <div style="">
            <label for="name">Nome do Produto:</label>
            <input type="text" class="form-control" name="name">
            <label for="description">Descrição:</label>
            <input type="text" class="form-control" name="description">
            <label for="price">Preço:</label>
            <input type="number" class="form-control" step="0.1" name="price">
            <label for="stock">Estoque:</label>
            <input type="number" class="form-control" name="stock">
            <label for="image">Imagem:</label>
            <input type="file" class="form-control" name="image">
            <label for="category_id">Selecione uma categoria:</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="tags[]">Selecione as Tags:</label>
            <select multiple name="tags[]" class="form-control">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-1">Enviar</button>
        </div>

    </form>
@endsection
