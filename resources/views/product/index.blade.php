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
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product -> name}}</td>
            <td>{{$product -> description}}</td>
            <td>{{$product -> price}}</td>
            <td>{{$product -> stock}}</td>
            <td><a href="{{route('products.edit', $product->id)}}">Editar</td>
        @endforeach
        </tr>
    </table>