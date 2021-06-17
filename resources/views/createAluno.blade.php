@extends('eventos')
@section('create')
<h1>Cadastro de Aluno</h1>

<!-- mostrando na tela se tem erro no birigunaiti -->
    @if(isset($errors) && count($errors) > 0)
    <div class="error">
        @foreach($errors->all() as $error)

        {{$error}} <br>

        @endforeach
    </div>
    <br>
    @endif

<form name="formCad" id="formCad" method="post" action="{{url('aluno/store')}}">
    @csrf
    <label for="nome">Nome:</label>
    <input required type="text" name="nome"><br><br>
    <label for="idade">Idade:</label>
    <input required type="number" name="idade"><br><br>
    <label for="curso">Curso:</label>
    <input required type="text" name="curso"><br><br>
    <label for="bolsa">Bolsa:</label>
    <input required type="number" name="bolsa"><br><br>
    <label for="created_at">Criado em:</label>
    <input required type="date" name="created_at" value="{{$dateCad}}">
    <br>
    <br>
    <input type="submit" value="Cadastrar">
</form>
@stop