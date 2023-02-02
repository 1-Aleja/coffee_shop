
<div class='container'>
    <div>
        <h1>Listado de productos</h1>
    </div>
    <div>
        <form action="/products/create" method="GET">
            <button type="submit">Crear</button>
        </form>
    </div>
    <div>
        <table>
            <thead >
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Fecha de creación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->reference}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->date}}</td>
                        <td>
                            <form action="/products/{{$product->id}}/edit" method="GET">
                                <button>Editar</button>
                            </form>
                            <form action="/products/{{$product->id}}/destroy" method="POST">
                                {{ csrf_field() }}
                                <button type="submit">Eliminar</button>
                            </form>
                            <form action="/products/{{$product->id}}/sale" method="GET">
                                <button type="submit">Venta de Producto</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

