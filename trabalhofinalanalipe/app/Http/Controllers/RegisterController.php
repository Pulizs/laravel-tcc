<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;


class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }
    
    public function register(RegisterRequest $request)
    {
        // faz a validação do formulário
        // salva o usuário no banco
        $user = User::create(array_merge($request->validated(), ['role' => 'USER']));
        
        // autentica o usuário
        auth()->login($user);
        
        // redireciona para a dashboard
        return redirect('/')->with('success', "Cadastro efetuado com sucesso");
    }
    
}

