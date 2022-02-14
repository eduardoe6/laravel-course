<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        $soma = $p1 + $p2;
//        echo "A soma de  $p1 + $p2 é $soma";

        return view('site.teste', ['p1' => $p1, 'p2' => $p2, 'soma' => $soma]); //Array associativo
        //return view('site.teste', compact('p1', 'p2', 'soma')); // Compact
        //return view('site.teste')->with('p1', $p1)->with('p2', $p2)->with('soma', $soma); // With

    }
}
