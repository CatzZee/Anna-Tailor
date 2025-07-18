<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterValidation;
use Illuminate\Http\Request;

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
    public function RegisterAccount(RegisterValidation $request) {
        $Validated = $request->validated();
        print_r($Validated);
    }
}
