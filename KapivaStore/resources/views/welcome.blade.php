@extends('layouts.store')

@section('content')
    <section class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="mx-3 col-sm-10 col-md-6 col-lg-2 my-2" style="height:200px;width=100px">
                    <img src="{{ asset($product->image) }}" class="img-fluid">
                    <span class="d-block h6 text-center mt-3">{{ $product->name }}</span>
                    <div class="text-center">
                        <span class="text-muted">R$ {{ $product->price }}</span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('show.product', $product->id) }}" class="btn btn-secondary btn-sm">Visualizar</a>
                        <form action="{{ route('cart.store', $product->id) }}" method="POST" style="display:inline">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Comprar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
