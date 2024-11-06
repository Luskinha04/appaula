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
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product -> name}}</td>
            <td>{{$product -> description}}</td>
            <td>{{$product -> price}}</td>
            <td>{{$product -> stock}}</td>
        @endforeach
        </tr>
    </table>