@extends('eventos')
@section('create')
<br> 
<h1>Cadastro de Professor</h1>

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
<form name="formCad" id="formCad" method="post" action="{{url('professor/store')}}">
    @csrf
    <label for="nome">Nome:</label>
    <input required type="text" name="nome"><br><br>
    <label for="materia">Matéria:</label>
    <input required type="text" name="materia"><br><br>
    <label for="vl_hora_aula">Valor Hora-Aula:</label>
    <input required type="Number" name="vl_hora_aula"><br><br>
    <input required type="submit" value="Cadastrar">
</form>
@stop