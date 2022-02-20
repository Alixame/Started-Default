<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function viewPainel(){

        return view('site.admin.painel');

    }
}
