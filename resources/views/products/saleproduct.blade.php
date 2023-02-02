<form action="/products/{{$product->id}}/sale" method="POST">
    {{ csrf_field() }}
    
    <h1>{{$product->name}}</h1>
    <a>Stock</a>
    <div class="w-25 input-group mb-3">
        <input name='sale' type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" value="{{$product->sale}}" required>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Registrar Venta</button>
    </div>
</form>
        