@extends('eventos')
@section('registro')
<h3>Visualizar</h3>
<div>
    Id: {{$aluno->id}}<br>
    Nome: {{$aluno->nome}}<br>
    Idade: {{$aluno->idade}}<br>
    Curso: {{$aluno->curso}}<br>
    Valor da bolsa: R$ {{$aluno->bolsa}}<br>
    Ingresso em: {{$aluno->created_at}}<br>
    Atualização em: {{$aluno->updated_at}}<br>
</div>

@stop