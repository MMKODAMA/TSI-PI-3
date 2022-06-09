@extends('layouts.store')

@section('content')
<form action="{{route('category.update', $category->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form">
        <label for="name" class="mt-3">Nome da Categoria: </label>
        <input type="text" class="form-control mt-2" name="name" value="{{$category->name}}">
        <button class="btn btn-primary mt-2" type="submit">Enviar</button>
    </div>
</form>
@endsection
