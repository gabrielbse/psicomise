<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { //return view('home');

    //Filtro solicitações
  $user = Auth::user()->id;

       $user = Auth::user();
       if(!empty($user->roles)){ 
                $role;
                foreach($user->roles as $v){
                    $role = $v->name ;
                    
                }

            if($role == "Administrador"){ return view('telasIniciais.TelaInicialAdministrador');} 
            else if($role == "Pesquisador"){ return view('telasIniciais.TelaInicialPesquisador');}
            else{return view('home');}
        }
        else{
            return view('home');
       }
    }
}