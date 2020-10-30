<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidato;

class candidatoController extends Controller
{
    public function candidatar(candidato $candidato, Request $request)
    {
        $request->validate(['name'=>'required']);
        $candidato->nome = $request->name;
        $candidato->equipe = $request->equipe;
        $candidato->turno = $request->turno;
        $return = $candidato->save();

        if($return)
        {
            return redirect()->route('candidato')->withInput()->withErrors(['sucesso' => 'Cadastro realizado!']);
        }
        else
        {
            return redirect()->route('candidato')->withInput()->withErrors(['erro' => 'Ops, algo deu errado!']);
        }
    }
//    public function candidatar(Request $request)
//    {
//        if(!$request->validate() == fail())
//        {
//            return redirect()->route('candidatar.do')->withInput()->withErrors();
//        }
//
//
//
//    }



}
