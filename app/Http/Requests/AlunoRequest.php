<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    /**
     * Determina if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //return false; // o original é false, mas a gnt muda para true pq a gnt autoriza sim o user a entrar na pg
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=>'required|between:3,30',
            'idade'=>'required|numeric|between:14,90',
            'curso'=>'required',
            'bolsa'=>'required|numeric|gte:100',
            'created_at'=>'required',
        ];
    }

    /**
     * Essa função/método altera a mensagem de erro para que possa ser personalizada
     * 
     * @return array/lista
     */
    public function messages()
    {
        return [
            'nome.required' => '⚠ Favor digitar seu nome!',
            'idade.required' => '⚠ Você não informou sua idade!',
            'idade.numeric' => '⚠ Dados inválidos para a idade!',
            'curso.required' => '⚠ Informe o seu curso!',
            'bolsa.required' => '⚠ Não digitou o valor de bolsa!',
            'bolsa.numeric' => '⚠ Dados inválidos para a bolsa!',
            'created_at.required' => '⚠ Não inseriu o valor da data!',
        ];
    }
}
