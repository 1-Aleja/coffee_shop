<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<form action="/products/{{$product->id}}/sale" method="POST">
    {{ csrf_field() }}
    <div class="title">
        <h1>{{$product->name}}</h1>
    </div>
    <div class="inputEdit">
        
        <div >
            <a>Stock</a>
            <input name='sale' type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" value="{{$product->sale}}" required>
        </div>
        <div class="inputSend">
            <button type="submit" class="btn btn-primary">Registrar Venta</button>
        </div>
    </div>
</form>
        