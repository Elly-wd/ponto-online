<?php

namespace App\Http\Controllers;

use App\Models\Inscritos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscritoController extends Controller
{
    public function mostraInscritos()
    {
        $inscritos = Inscritos::all();

        return view('welcome', ['inscritos' => $inscritos]);
    }

    public function store(Request $request)
    {
        $validacao = Validator::make($request->all(), [
            'nome' => 'required',
            'email' => 'required',
        ]);

        if ($validacao->fails()) {
            return redirect('/')->with("msg", "Algo aconteceu. Tente novamente");
        }else{
            $inscrito = new Inscritos();

            $inscrito->nome = $request->nome;
            $inscrito->email = $request->email;
            $inscrito->telefone = $request->telefone;

            $inscrito->save();

            return redirect('/')->with("msg", "Inscrição concluída com sucesso!");
        }
    }

}
