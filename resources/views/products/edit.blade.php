<form action="/products/{{$product->id}}/edit" method="POST">
    {{ csrf_field() }}
    <a>Nombre del Producto</a>
    <div class="w-25 input-group mb-3">
        <input name='name'type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" value="{{$product->name}}"  required>
    </div>
    <a>Referencia</a>
    <div class="w-25 input-group mb-3">
        <input name='reference'type="number" class="form-control" placeholder="Referencia" aria-label="Recipient's username" value="{{$product->reference}}" required>
    </div>
    <a>Precio</a>
    <div class="w-25 input-group mb-3">
        <input name='price' type="number" class="form-control" placeholder="Precio" aria-label="Recipient's username" value="{{$product->price}}" required>
    </div>
    <a>Peso</a>
    <div class="w-25 input-group mb-3">
        <input name='weight'type="number" class="form-control" placeholder="Peso en Kg" aria-label="Recipient's username" value="{{$product->weight}}" required>
    </div>
    <a>Categoria</a>
    <div class="w-25 input-group mb-3">
        <input name='category' type="text" class="form-control" placeholder="Categoria" aria-label="Recipient's username" value="{{$product->category}}" required>
    </div>
    <a>Stock</a>
    <div class="w-25 input-group mb-3">
        <input name='stock' type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" value="{{$product->stock}}" required>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Registrar Producto</button>
    </div>
</form>
        