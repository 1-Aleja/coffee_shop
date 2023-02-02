<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<form action="/products/{{$product->id}}/edit" method="POST">
    {{ csrf_field() }}
    <div class="title"><h1>Editar Poducto</h1></div>
    <div class="inputEdit">
        <a>Nombre del Producto</a>
        <div class="input-create">
            <input name='name'type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" value="{{$product->name}}"  required>
        </div>
        <a>Referencia</a>
        <div class="input-create">
            <input name='reference'type="number" class="form-control" placeholder="Referencia" aria-label="Recipient's username" value="{{$product->reference}}" required>
        </div>
        <a>Precio</a>
        <div class="input-create">
            <input name='price' type="number" class="form-control" placeholder="Precio" aria-label="Recipient's username" value="{{$product->price}}" required>
        </div>
        <a>Peso</a>
        <div class="input-create">
            <input name='weight'type="number" class="form-control" placeholder="Peso en Kg" aria-label="Recipient's username" value="{{$product->weight}}" required>
        </div>
        <a>Categoria</a>
        <div class="input-create">
            <input name='category' type="text" class="form-control" placeholder="Categoria" aria-label="Recipient's username" value="{{$product->category}}" required>
        </div>
        <a>Stock</a>
        <div class="input-create">
            <input name='stock' type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" value="{{$product->stock}}" required>
        </div>
        <div class="inputSend">
            <button type="submit" class="btn btn-primary">Registrar Producto</button>
        </div>
    </div>
</form>
        