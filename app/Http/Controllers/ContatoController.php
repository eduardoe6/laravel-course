<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContatoController extends Controller
{
    public function contato(): Factory|View|Application
    {


        return view('site.contato', ['titulo' => 'Contato']);
    }
}
