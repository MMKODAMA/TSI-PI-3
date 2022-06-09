@extends('layouts.store')

@section('content')
<form action="{{route('tag.update', $tag->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form">
        <label for="name" class="mt-3">Nome da Tag: </label>
        <input type="text" name="name" class="form-control mt-1" value="{{$tag->name}}">
        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
    </div>
</form>
@endsection
