@extends('layouts.store')

@section('content')
    <form action="{{ route('tag.store') }}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="name" class="mt-3">Nome da tag:</label>
            <input type="text" class="form-control mt-1" name="name">
            <button type="submit" class="btn btn-primary mt-2">Enviar</button>
        </div>
    </form>
@endsection
