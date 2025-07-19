<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class AuthController extends Controller
{
    public function ShowLoginForm()
    {
        return view('Auth/LoginForm');
    }
    public function ShowRegisterForm()
    {
        return view('Auth/RegisterForm');
    }
    public function RegisterAccount(RegisterValidation $request)
    {
        $Validated = $request->validated();
        $hashPassword = Hash::make($Validated['password']);
        if (Hash::check($Validated['password'], $hashPassword)) {
            $Validated['password'] = $hashPassword;
            User::create($Validated);
            return redirect()->route('FormLogin')->with('success', 'Akun Telah Berhasil Dibuat. Silahkan Login');
            // echo '<br>';
            // print_r($Validated);
            
        } else {
            return redirect()->route('FormRegister')->with('error', 'Akun Gagal Dibuat');
            
        }
        // echo '<br>';
        // print_r($Validated);

    }
}
