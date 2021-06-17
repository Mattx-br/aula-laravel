@extends('eventos')
@section('edit')
<h1>Edição de Aluno(a) {{$aluno->nome}}</h1>


<!-- com hidden -->
<!-- <form name="formCad" id="formCad" method="post" action='{{ url( "aluno/update" ) }}'> -->

<!-- sem hidden -->
<form name="formCad" id="formCad" method="post" action='{{ url( "aluno/update/$aluno->id" ) }}'>

    @csrf
    <!-- Serve para proteção do formulário, gera uma tag aleatória, para ver se foi dali que saiu mesmo, (chave síncrona) -->

    <!-- <input type="hidden" name="id" value="{{$aluno->id}}"> -->

    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="{{$aluno->nome}}"><br><br>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" value="{{$aluno->idade}}">
    <br><br>

    <label for="curso">Curso:</label>
    <input type="text" name="curso" value="{{$aluno->curso}}"><br><br>

    <label for="bolsa">Bolsa:</label>
    <input type="number" name="bolsa" value="{{$aluno->bolsa}}"><br><br>

    <label for="created_at">Criado em:</label>
    <input type="date" name="created_at" value="{{$aluno->created_at->format('Y-m-d')}}">

    <br>
    <br>

    <input type="submit" value="Confirmar">
</form>
@stop