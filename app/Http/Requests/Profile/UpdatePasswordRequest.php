<?php

namespace App\Http\Requests\Profile;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
            
            /* 'current_password' => [
                'required', 'string',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, $this->route('user')->password)) {
                        return back()->with('danger', 'La contraseña actual no es correcta');
                    }
                }
            ], */
            
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'password' => 'contraseña',
        ];
    }
}
