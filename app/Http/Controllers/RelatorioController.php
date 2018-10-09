<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\User;
use App\Solicitacao;
use App\Tuma;
/**
 * Description of RelatorioController
 *
 * @author Lucas
 */
class RelatorioController extends Controller {
    
    
    public function relatorioUsuario(){
        
        $usuarios = User::all();
        //dd($usuarios);
        $pdf = \PDF::loadView('relatorios.usuarios', ['usuarios' => $usuarios]);
        return $pdf->stream();
        
    }

        public function relatorioSolicitacao($id){
        
        $solicitacao = Solicitacao::find($id);
        
        
       
        //dd($solicitacao->turma);
        $pdf = \PDF::loadView('relatorios.solicitacao', ['solicitacao' => $solicitacao])->setPaper('a4', 'landscape');
        
        return $pdf->stream();
  
    }
}
