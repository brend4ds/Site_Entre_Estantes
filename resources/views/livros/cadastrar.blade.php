{{--views/animais/cadastrar.blade.php--}}

@extends('base')

@section('titulo', 'Cadastrar | Livros')

@section('conteudo')

<div class="flex flex-wrap">
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-3 flex items-center">Formulário de Cadastro</p>
        <p>Preencha o formulário</p>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{route ('livros.gravar')}}" enctype="multipart/form-data">
            @csrf
            {{-- //id, titulo, autor, editora, ano_publicacao, genero, sinopse, capa --}}
            <div class="">
                <label class="block text-sm text-gray-600" for="titulo">Titulo</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('titulo') }}" id="titulo" name="titulo" type="text" required="" placeholder="Titulo" aria-label="Titulo">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="autor">Autor</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('autor') }}" id="autor" name="autor" type="text"  placeholder="Autor" aria-label="Autor">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="editora">Editora</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('editora') }}" id="editora" name="editora" type="text"  placeholder="Editora" aria-label="Editora">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="ano_publicacao">Ano Publicacao</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('ano_publicacao') }}" id="ano_publicacao" name="ano_publicacao" type="number"  placeholder="Ano Publicação" aria-label="Ano Publicação">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="genero">Gênero</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('genero') }}" id="genero" name="genero" type="text"  placeholder="Gênero" aria-label="Gênero">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="snopse">Sinopse</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('sinopse') }}" id="sinopse" name="sinopse" type="text"  placeholder="Sinopse" aria-label="Sinopse">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="idade">Capa</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="imagem" name="imagem" type="file"  placeholder="Imagem" aria-label="Imagem">
            </div>
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Gravar</button>
            </div>
        </form>
    </div>
</div>


@endsection
