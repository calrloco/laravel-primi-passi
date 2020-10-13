<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function chiSiamo()
    {
        return view('contatti');
    }
    public function prodotti()
    {
        $cards = config('prodotti');
        $lunghe = [];
        $corte = [];
        $cortissime = [];

        foreach ($cards as $key => $card) {
            if ($card['tipo'] == 'lunga') {
                $lunghe[$key] = $card;
            } else if ($card['tipo'] == 'cortissima') {
                $cortissime[$key] = $card;
            } else if ($card['tipo'] == 'corta') {
                $corte[$key] = $card;
            }
        }
        return view('prodotti', compact('lunghe','corte','cortissime'));
    }
    public function home()
    {
        return view('home');
    }
}
