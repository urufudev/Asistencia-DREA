<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'ap_paterno' => 'required|string|max:255',
            'ap_materno' => 'required|string|max:255',
            'dni' => 'required|digits:8|numeric|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed',
            'birthday' =>'required|date',
            'phone' => 'required|digits:9',
            'genre' =>'required',
            'vaccine' =>'required',
            'department_id' =>'required',
            'province_id' =>'required',
            'district_id' =>'required',
            'address' =>'required',
            'office_id' =>'required',
            'laboral_id' =>'required',
            'pension_id' =>'required',
            'position_id' =>'required',
            'condition_id' =>'required',


        ];
    }

    public function attributes()
    {
    return [
    
        'name' => 'Nombre',
        'ap_paterno' => 'Apellido Paterno',
        'ap_materno' => 'Apellido Materno',
        'dni' => 'DNI',
        'email' => 'Correo Electronico',
        'password' => 'Contraseña',
        'birthday' =>'Fecha de Nacimiento',
        'phone' => 'Celular',
        'genre' =>'Genero',
        'vaccine' =>'Vacuna',
        'department_id' =>'Departamento',
        'province_id' =>'Provincia',
        'district_id' =>'Distrito',
        'address' =>'Dirección',
        'office_id' =>'Oficina',
        'laboral_id' =>'Régimen Laboral',
        'pension_id' =>'Régomen de Pensiones',
        'position_id' =>'Cargo',
        'condition_id' =>'Condición Laboral',       

        ];
    }
}
