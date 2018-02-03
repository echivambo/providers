<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
            'nome_empresa' => 'required|unique:providers|min:2|max:155',
            'pessoa_contacto' => 'required|min:2|max:150',
            'alvara'=>'required',
            'nuit'=>'required|numeric|min:4|max:25',
            'pais'=>'required',
            'provincia'=>'required',
            'cidade'=>'required',
            'bairro'=>'required|string|min:2|max:60',
            'endereco_fisico'=>'required|string|min:2|max:255',
            'end_numero'=>'required|numeric|min:1|max:15',
            'ramo_atividade'=>'required',
            'telefone_fixo'=>'numeric|min:5|max:20',
            'fax'=>'numeric|min:5|max:20',
            'celular'=>'required|numeric|min:5|max:20',
            'email'=>'required|string|email|min:3|max:100',
            'nome_banco'=>'required|string|min:2|max:100',
            'numero_conta'=>'required||unique:providers|min:2|max:30|same:prov_cods',
            'nib'=>'required|numeric|unique:providers|min:2|max:30',
            'nome_agencia'=>'required|string|min:2|max:100',
            'bancaria'=>'required|string|min:2|max:255',

            ];
    }

    public function messages()
    {
        return [

        ];
    }
}
