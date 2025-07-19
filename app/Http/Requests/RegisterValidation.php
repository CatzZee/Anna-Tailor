<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Mail\Message;

class RegisterValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email:dns|unique:users,email',
            'role' => 'required|string',
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)
                ->mixedcase()
                ->symbols()
            ]
        ];
    }
    public function messages(): array
    {
        return [
            'name' => 'Masukan Nama',
            'email.email' => 'Masuka email dengan format yang benar',
            'password.symbols' => 'gunakan simbol /%+-',
            'password.mixedCase' => 'gunakan huruf besar dan kecil',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'password.min' => 'Password minimal harus 8 karakter.',
        ];
    }
    public function after(): array
    {
        return[
            function (\Illuminate\Contracts\Validation\Validator $validator){
                $role = $this->input('role');

                $allowedRoles = ['admin', 'pelanggan', 'kasir']; 
                if (!in_array($role, $allowedRoles)) {
                    $validator->errors()->add(
                        'role',
                        "peran tidak ditemukan"
                    );
                }
            }
        ];
    }
}
