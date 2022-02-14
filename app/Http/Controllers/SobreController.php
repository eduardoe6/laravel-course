<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class SobreController extends Controller
{
    public function sobre(): Factory|View|Application
    {
        return view('site.sobre');
    }
}
