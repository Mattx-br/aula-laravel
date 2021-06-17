@extends('eventos')
@section('leitura')
<h2>Alunos Cadastrados</h2>



<div class="btnCadastrar">
    <a href="{{url('aluno/create')}}">
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
                <th scope="col">Idade</th>
                <th scope="col">Curso</th>
                <th scope="col">Bolsa R$</th>
                <th scope="col">Inclusão</th>
                <th scope="col">Atualização</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach($aluno as $alunos)
            <tr>
                <th scope="row">{{$alunos->id}}</th>
                <td>{{$alunos->nome}}</td>
                <td>{{$alunos->idade}}</td>
                <td>{{$alunos->curso}}</td>
                <td>{{$alunos->bolsa}}</td>
                <td>{{$alunos->created_at}}</td>
                <td>{{$alunos->updated_at}}</td>
                <td>
                    <a href='{{url("aluno/$alunos->id")}}'>
                        <button>Visualizar</button>
                    </a>

                    <a href='{{url("aluno/edit/$alunos->id")}}'>
                        <button>Editar</button>
                    </a>

                    <a href='{{url("aluno/delete/$alunos->id")}}' class="js-del-aluno">
                        <button>Deletar</button>
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- da pra por direto no blade ou na function boot no app\Providers\AppServiceProvider.php -->
    <!-- {{$aluno->links('pagination::bootstrap-4')}} -->

    <!-- com estilo de paginação normal  -->
    <div class="horizontal" style="display: flex; flex-direction: row;">
        {{$aluno->links()}}
    </div>
</div>
@stop