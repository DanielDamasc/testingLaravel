<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showPage(): View
    {
        $data = [
            'Dan' => [
                'Ingles',
                'Portugues'
            ],
            'Maria' => [
                'Ingles',
                'Espanhol'
            ],
            'Pedro' => [
                'Mandarim',
                'Frances'
            ]
        ];

        return view('home', ['pessoas_linguas' => $data]);
    }
}
