
<form action="{{route('product.store')}}" method="POST">

    @csrf
    Nome do produto<input type="text" name="name">
    Decrição:<input type="text" name="description">
    Preço:<input type="number" step=".01" name="price">
    Estoque:<input type="number" step=".01" name="stock">

    <button type="submit">Enviar</button>
</form>
