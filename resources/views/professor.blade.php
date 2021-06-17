@extends('eventos')
@section('leitura')

<h2>Professores Cadastrados</h2>

<div class="btnCadastrar">
    <a href="{{url('professor/create')}}">
        <button>Cadastrar</button>
    </a>
</div>
<div>

    @csrf
    <table>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Matéria</th>
                <th scope="col">Valor Hora</th>
                <th scope="col">Inclusão</th>
                <th scope="col">Atualização</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professor as $professores)
            <tr>
                <th scope="row">{{$professores->id}}</th>
                <td>{{$professores->nome}}</td>
                <td>{{$professores->materia}}</td>
                <td>{{$professores->vl_hora_aula}}</td>
                <td>{{$professores->created_at}}</td>
                <td>{{$professores->updated_at}}</td>
                <td>
                    <a href='{{url("professor/$professores->id")}}'>
                        <button>Visualizar</button>
                    </a>
                    <a href='{{url("professor/edit/$professores->id")}}'>
                        <button>Editar</button>
                    </a>
                    <a href='{{url("professor/delete/$professores->id")}}' class="js-del-professor">
                        <button>Deletar</button>
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

<!-- da pra por direto no blade ou na function boot no app\Providers\AppServiceProvider.php -->
    <!-- com estilo de paginação normal  -->
    <!-- {{$professor->links()}} -->
    
    {{$professor->links('pagination::bootstrap-4')}}
</div>

@stop