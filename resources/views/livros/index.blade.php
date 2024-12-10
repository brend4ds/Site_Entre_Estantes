{{--resources/views/animais/index.blade.php--}}

@extends('base')

@section('titulo', 'Livros')

@section('conteudo')
<p>
    <a href="{{route('livros.cadastrar')}}" style="background-color:#8c6039" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"><i class="fas fa-plus mr-3"></i>Cadastrar livro</a>
</p>
<p>Veja nossa lista de livros</p>
 
<div class="w-full mt-12">
<p class="text-xl pb-3 flex items-center">Livros</p>
<div class="bg-white overflow-auto">
<table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
    <thead>
        <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Titulo</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Autor</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Editora</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Ano de Publicação</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Gênero</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Sinopse</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Capa</th>
        </tr>
    </thead>
    <tbody>
    @foreach($livros as $livro)
        <tr class="hover:bg-grey-lighter">
            <td class="py-4 px-6 border-b border-grey-light">{{ $livro['titulo'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $livro['autor'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $livro['editora'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $livro['ano_publicacao'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $livro['genero'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $livro['sinopse'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $livro['capa'] }}</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> 
                <a class="px-3 py-1 font-semibold text-green-900 bg-green-200 border-b border-gray-200 rounded-full" href="{{ route('livros.editar', $livro['id']) }}">Editar</a>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> 
                <a class="px-3 py-1 font-semibold text-red-900 bg-red-200 border-b border-gray-200 rounded-full" href="{{ route('livros.apagar', $livro['id']) }}">Apagar</a>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection