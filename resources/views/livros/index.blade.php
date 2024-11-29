{{--resources/views/clientes/index.blade.php--}}

@extends('base')

@section('titulo', 'Livros')

@section('conteudo')
<p>
    <a href="{{route('livros.cadastrar')}}">Cadastrar livro</a>
</p>
<p>Veja nossa lista de livros</p>

<table border="1">
    <tr>
    //id, titulo, autor, editora, ano_publicacao, genero, sinopse, capa
        <th>Titulo</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>Ano de Publicação</th>
        <th>Gênero</th>
        <th>Sinopse</th>
        <th>Capa</th>
    </tr>

    @foreach($livros as $livro)
    <tr>
        <td>{{ $livro['titulo'] }}</td>
        <td>{{ $livro['autor'] }}</td>
        <td>{{ $livro['editora'] }}</td>
        <td>{{ $livro['ano_publicacao'] }}</td>
        <td>{{ $livro['genero'] }}</td>
        <td>{{ $livro['sinopse'] }}</td>
        <td>{{ $livro['capa'] }}</td>
        <td><a href="{{ route('livros.editar', $livro['id']) }}">Editar</a></td>
        <td><a href="{{ route('livros.apagar', $livro['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>

@endsection
 