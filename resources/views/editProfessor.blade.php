@extends('eventos')
@section('edit')
<h1>Edição de Professor(a) {{$professor->nome}}</h1>

<!-- mostrando na tela se tem erro no birigunaiti -->
@if(isset($errors) && count($errors) > 0)
    <div class="error">
        @foreach($errors->all() as $error)

        {{$error}} <br>

        @endforeach
    </div>
    <br>
    @endif
<br>

<!-- com hidden -->
<!-- <form name="formCad" id="formCad" method="post" action='{{ url( "professor/update" ) }}'> -->

<!-- sem hidden -->
<form name="formCad" id="formCad" method="post" action='{{ url( "professor/update/$professor->id" ) }}'>

    @csrf
    <!-- Serve para proteção do formulário, gera uma tag aleatória, para ver se foi dali que saiu mesmo, (chave síncrona) -->

    <!-- <input type="hidden" name="id" value="{{$professor->id}}"> -->

    <label for="nome">Nome:</label>
    <input required type="text" name="nome" value="{{$professor->nome}}"><br><br>

    <label for="materia">Matéria:</label>
    <input required type="text" name="materia" value="{{$professor->materia}}">
    <br><br>

    <label for="curso">Valor da Hora por Aula:</label>
    <input required type="number" name="vl_hora_aula" value="{{$professor->vl_hora_aula}}"><br><br>

    <label for="created_at">Criado em:</label>
    <input required type="date" name="created_at" value="{{$professor->created_at->format('Y-m-d')}}">

    <br>
    <br>

    <input type="submit" value="Confirmar">
</form>
@stop