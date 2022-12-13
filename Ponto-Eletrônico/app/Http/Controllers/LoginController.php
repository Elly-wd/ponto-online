<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\HistoricoDePonto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function realizaLogin()
    {
        return view('paginaInicial');
    }

    public function realizaLogout()
    {
        return view('login');
    }

    public function realizaCadastro(Request $resquest)
    {
        $validacao = Validator::make($resquest->all(), [
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
        ]);

        if ($validacao->fails()) {
            return redirect('cadastro')->with('message', 'Preencha os dados corretamente!');
        }else{
            $cadastro = new Funcionario();

            $cadastro->nome = $resquest->nome;
            $cadastro->email = $resquest->email;
            $cadastro->senha = $resquest->senha;

            $cadastro->save();
            
            return redirect('/')->with('message', 'Cadastro concluído!');
        }
    }


}
