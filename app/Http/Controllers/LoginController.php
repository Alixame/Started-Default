<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Metodo responsvel por renderizar a tela de login administrativo
     * 
     * @return view 
     * 
     */
    public function viewLogin() {
        return view('site.login');
    }
}
