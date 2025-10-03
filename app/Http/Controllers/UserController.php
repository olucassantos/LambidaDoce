<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mostra a tela de criação do usuário
    public function create()
    {
        return view('user.create');
    }

    // Armazena o novo usuário
    public function store(Request $request)
    {
        // Cria um usuário vazio
        $usuario = new User();

        // Preenche os dados do usuário com os dados do formulário
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));

        // Salva o usuário no banco de dados
        $usuario->save();

        // Redireciona para a página de administração
        return redirect()->route('admin.home');
    }
}
