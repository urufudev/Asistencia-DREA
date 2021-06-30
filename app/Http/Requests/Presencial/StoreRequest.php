<?php

namespace App\Http\Requests\Presencial;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            
            'feber' => 'required',
            'respire' => 'required',
            'fleme' => 'required',
            'olfate' => 'required',
            'personscovid' => 'required',
            'medicine' => 'required',
  
        ];
    }

    public function attributes()
    {
        return [
        
            'feber' => 'fiebre',
            'respire' => 'respiración',
            'fleme' => 'flema',
            'olfate' => 'olfato',
            'personscovid' => 'personas contagiadas',
            'medicine' => 'medicina',

            ];
    }
}
