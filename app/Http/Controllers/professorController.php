<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use App\Models\ProfModel;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; 

class professorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $objProfessor;
    //Contructor
    public function __construct()
    {
        $this->objProfessor = new profModel();
    }

    public function index()
    {
        $professor = $this->objProfessor->all();
        // return view('professor', compact('professor'));

        return view('professor',
        [
            'professor'=> DB::table('professor')->paginate(5)
        ], compact('professor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createProfessor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfessorRequest $request)
    {
        //
        $this->objProfessor->create([
            'nome' => $request->nome,
            'materia' => $request->materia,
            'vl_hora_aula' => $request->vl_hora_aula
        ]);
        return redirect('professor');
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
        $professor = $this->objProfessor->find($id);
        return view('showProfessor', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = $this->objProfessor->find($id);
        // $professors=$this->objprofessor->all();
        return view('editProfessor', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfessorRequest $request, $id)
    {
        $this->objProfessor->where(['id' => $id])->update([
            'nome' => $request->nome,
            'materia' => $request->materia,
            'vl_hora_aula' => $request->vl_hora_aula,
            'created_at' => $request->created_at
        ]);
        //redireciono para a view dos alunos
        return redirect('professor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor = $this->objProfessor->destroy($id);
        //redireciono para a view dos professors
        return redirect('professor');
    }
}
