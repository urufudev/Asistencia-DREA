<?php

namespace App\Http\Requests\Event;

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
            'name'=>'required',
            'date'=>'required',
            'userlimit'=>'required',
            'start'=>'required|date',
            'end' => 'required|date|after:start'

        ];
    }
    public function attributes()
    {
    return [
    
        'name' => 'Nombre',
        'date'=>'Fecha',
        'userlimit' => 'Limite de usuarios',
        'start' => 'Fecha y hora de inicio',
        'end' => 'Fecha y hora de finalización',
        ];
    }
}
