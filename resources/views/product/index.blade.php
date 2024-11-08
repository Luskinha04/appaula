<a href="{{ route('products.create') }}">Cadastrar</a>
<title>Tabela de Produtos</title>
</head>
<body>

    <h2>Produtos</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Atualizar</th>
            <th>Visualizar</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product -> name}}</td>
            <td>{{$product -> description}}</td>
            <td>{{$product -> price}}</td>
            <td>{{$product -> stock}}</td>
            <td><a href="{{route('products.edit', $product->id)}}">Editar</td>
            <td><a href="{{route('products.show', $product->id)}}">Mostrar</td>
        @endforeach
        </tr>
    </table>