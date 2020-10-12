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

        foreach ($cards as $card) {
            if ($card['tipo'] == 'lunga') {
                $lunghe[] = $card;
            } else if ($card['tipo'] == 'cortissima') {
                $cortissime[] = $card;
            } else if ($card['tipo'] == 'corta') {
                $corte[] = $card;
            }
        }
        return view('prodotti', compact('lunghe','corte','cortissime'));
    }
    public function home()
    {
        return view('home');
    }
}
