<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=>'required|between:3,35',
            'materia'=>'required|between:4,40',
            'vl_hora_aula'=>'required|numeric|between:15,50',
            // 'created_at' => 'required'
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
            'nome.required' => '⚠ Esqueceu de digitar seu nome?',
            'nome.between' => '⚠ Seu nome teve menos de 3 caracteres ou ultrapassou os 35',

            'materia.required' => '⚠ Informe a sua matéria!',
            'materia.between' => '⚠ Sua matéria teve menos de 4 caracteres ou ultrapassou os 40!',
            
            'vl_hora_aula.required' => '⚠ Você não digitou o valor da Hora/aula!',
            'vl_hora_aula.numeric' => '⚠ Dados inválidos para o valor da Hora/aula',
            'vl_hora_aula.between' => '⚠ O valor da Hora/aula teve seu valor inferior a 15 ou ultrapassou os 50',
            
            // 'created_at.required' => '⚠ Informe a data da criação!',
        ];
    }
}
