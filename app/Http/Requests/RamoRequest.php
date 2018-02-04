<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RamoRequest extends FormRequest
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
            'ramo' => 'required|unique:ramos|max:150',
        ];
    }
    public function messages()
    {
        return [
            'ramo.ramo' => 'Por favor introduza um ramo valido',
            'ramo.required' => 'É necesario digitar um ramo',
            'ramo.unique'=>'Éste ramos ja existe',
            'ramo.max'=>'O ramo deve conter no max 150 caracteres'
        ];
    }
}
