<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GerarCodigoRequest extends FormRequest

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
            'email' => 'required|unique:prov_cods|max:150',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Por favor introduza um email valido',
            'email.required' => 'É necessario introduzir um Email',
            'email.unique'=>'Esta tentar introduzir um email ja existente na base de dados',
            'email.max'=>'O email deve ter no maximo 60 caracteres',
        ];
    }
}
