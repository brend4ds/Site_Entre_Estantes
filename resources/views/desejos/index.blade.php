{{--resources/views/clientes/index.blade.php--}}

@extends('base')

@section('titulo', 'Desejos')

@section('conteudo')
<p>
    <a href="{{route('desejos.cadastrar')}}">Cadastrar desejo</a>
</p>
<p>Lista de desejos</p>

<table border="1">
    <tr>
        <th>Nome</th>
    </tr>

    @foreach($desejos as $desejo)
    <tr>
        <td>{{ $desejo['name'] }}</td>
        <td><a href="{{ route('desejos.editar', $user['id']) }}">Editar</a></td>
        <td><a href="{{ route('desejos.apagar', $user['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>

@endsection
 