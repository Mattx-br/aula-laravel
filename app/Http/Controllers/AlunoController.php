<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\AlunoModel;
use Illuminate\Http\Request;
use Carbon\Carbon; // <-- API de datas

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; 


class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $objAluno;
    //Contructor
    public function __construct()
    {
        $this->objAluno = new AlunoModel();
    }

    public function index()
    {
        // dd($this->objAluno->all());
        // $aluno = $this->objAluno->all();
        // mostrar tudo de uma vez usa o all()
        $aluno = $this->objAluno->all()->sortByDesc('id');
        
        // já esse paginate, é para paginação, tipo de mostrar tantos por página(ex: 10 por pagina)
        
        // $aluno = $this->objAluno->paginate(5)->sortByDesc('id');
        // return view('aluno', compact('aluno'));
        return view('aluno',
        [
            'aluno'=> DB::table('aluno')->paginate(5)
        ], compact('aluno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dateCad = Carbon::now()->format('Y-m-d');
        // return view('createAluno');
        return view('createAluno', compact('dateCad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request)
    {
        //
        $this->objAluno->create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'curso' => $request->curso,
            'bolsa' => $request->bolsa,
            'created_at' => $request->created_at
        ]);
        return redirect('aluno');
        //Indica para qual página ir após a operação executada

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // com base no id passado, o objeto será enviado para a view
        $aluno = $this->objAluno->find($id);
        return view('showAluno', compact('aluno'));
        // echo "aluno com id: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // meu jeito
        // $aluno=$this->objAluno->find($id);
        // $dateCad = Carbon :: now()->format('Y-m-d');
        // return view('editAluno', compact('aluno', 'dateCad'));

        // jeito do prof
        // Faremos a leitura do registro e envio da instância para a view
        $aluno = $this->objAluno->find($id);
        return view('editAluno', compact('aluno')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // esse jeito tb deu certo 
    // (mas ai meu parceiro, pra esse funta tu tenq comentar a linha do input:hidden do id, e colocar uma rota em web.php pra aluno/update/{id})
    public function update(Request $request, $id)
    {
        $this->objAluno->where(['id' => $id])->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'curso' => $request->curso,
            'bolsa' => $request->bolsa,
            'created_at' => $request->created_at
        ]);
        //redireciono para a view dos alunos
        return redirect('aluno');
    }

    // jeito q deu certo já, usando o hidden
    // public function update(Request $request)
    // {
    //     $this->objAluno->where(['id'=>$request->id])->update([
    //         'nome'=>$request->nome,
    //         'idade'=>$request->idade,
    //         'curso'=>$request->curso,
    //         'bolsa'=>$request->bolsa,
    //         'created_at'=>$request->created_at
    //     ]);
    //     //redireciono para a view dos alunos
    //     return redirect('aluno');
    // }

 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // um jeito de fzr sem ajax
        $aluno = $this->objAluno->destroy($id);
        // redireciono para a view dos alunos
        return redirect('aluno');
    }
}
