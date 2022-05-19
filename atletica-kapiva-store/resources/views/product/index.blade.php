<!--pagina inicial da loja-->
<div>
    {{ session()->get('success')}}
</div>
@extends('layouts.app')
@section('content')


<div class="container">
    @foreach (produtos as produto)

    @endforeach
</div>
 @endsection
