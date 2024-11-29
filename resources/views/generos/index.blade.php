{{--resources/views/clientes/index.blade.php--}}

@extends('base')

@section('titulo', 'Gêneros')

@section('conteudo')
<p>
    <a href="{{route('generos.cadastrar')}}">Cadastrar gênero</a>
</p>
<p>Lista de gêneros</p>

<table border="1">
    <tr>
        <th>Nome</th>
    </tr>

    @foreach($generos as $genero)
    <tr>
        <td>{{ $genero['name'] }}</td>
        <td><a href="{{ route('generos.editar', $user['id']) }}">Editar</a></td>
        <td><a href="{{ route('generos.apagar', $user['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>

@endsection
 