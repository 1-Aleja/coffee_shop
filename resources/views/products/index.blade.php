<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div class='container'>
    <div class="title">
        <h1>Listado de productos</h1>
    </div>
    <div class="positionButton">
        <form action="/products/create" method="GET">
            <button class="buttonCreate" type="submit">Crear</button>
        </form>
    </div>
    <div>
        <table class='table'>
            <thead >
                <tr >
                    <th class='titleTable'>id</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Fecha de creación</th>
                    <th>Gestion</th>
                </tr>
            </thead>
            <tbody >
                @foreach($products as $product)
                    <tr>
                        <td class='titleTable'>{{$product->id}}</td>
                        <td class='titleTable' >{{$product->name}}</td>
                        <td class='titleTable' >{{$product->reference}}</td>
                        <td class='titleTable' >{{$product->price}}</td>
                        <td class='titleTable' >{{$product->weight}}</td>
                        <td class='titleTable' >{{$product->category}}</td>
                        <td class='titleTable' >{{$product->stock}}</td>
                        <td class='titleTable' >{{$product->created_at}}</td>
                        <td class='titleTable'>
                            <form action="/products/{{$product->id}}/edit" method="GET">
                                <button class="buttonEdit">Editar</button>
                            </form>
                            <form  action="/products/{{$product->id}}/destroy" method="POST">
                                {{ csrf_field() }}
                                <button class="buttonDelete" type="submit">Eliminar</button>
                            </form>
                            <form action="/products/{{$product->id}}/sale" method="GET">
                                <button class="buttonSale"type="submit">Venta de Producto</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

