@extends('eventos')
@section('registro')
<h3>Visualizar</h3>
<div>
    Id: {{$professor->id}}<br>
    Nome: {{$professor->nome}}<br>
    Matéria: {{$professor->materia}}<br>
    Valor por Hora: {{$professor->vl_hora_aula}}<br>
    Ingresso em: {{$professor->created_at}}<br>
    Atualização em: {{$professor->updated_at}}<br>
</div>

@stop