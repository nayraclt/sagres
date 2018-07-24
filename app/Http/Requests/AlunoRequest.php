<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'nome' => 'max:255|required',
            'matricula' => 'required|max:10',
            'email' => 'required|email|max:255|unique:tb_aluno',
            'endereco' => 'required',
            'bairro' => 'max:255',
            'cep' => 'max:255',
            'data_entrada' => 'required|max:15',
        ];
    }
}
