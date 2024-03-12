<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContatoModel;

use App\Rules\Uppercase;


class SiteController extends Controller
{
    public function index(){
        return view('home');
    }

    public function contato(){
        return view('contato');
    }

    public function salvar(Request $request){

        //https://laravel.com/docs/10.x/validation
        $dados_validados = $request->validate(
            [
                'nome'      => ['required', new Uppercase ],
                'email'     => ['required', 'regex:/^.+@.+$/i'],
                //'mensagem'  => 'required|min:5',
                'mensagem'  => ['required', 'min:5']
            ]
        );

        ContatoModel::create($dados_validados);

       return redirect()->route('site.contato')->with('sucesso','Mensagem recebida! Em breve, retornaremos!!!');
    }

}
