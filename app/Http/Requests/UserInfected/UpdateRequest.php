<?php

namespace App\Http\Requests\UserInfected;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'diagnosis_date' =>'required',
            'diagnosis_entity' =>'required',
            'break_number' =>'required',
            'break_start' =>'required',
            'break_end' =>'required',

        ];
    }

    public function attributes()
    {
    return [
    
        'diagnosis_date' =>'Fecha de Diagnostico',
        'diagnosis_entity' =>'Entidad de Diagnostico',
        'break_number' =>'Documento de Descanso',
        'break_start' =>'Inicio de Descanso',
        'break_end' =>'Fin de Descanso',
        ];
    }
}
