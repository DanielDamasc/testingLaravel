<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showPage(): View
    {
        $data = [
            'Carol' => [
                'Ingles',
                'Portugues'
            ],
            'Maria' => [
                'Ingles'
            ],
            'Pedro' => [
                'Mandarim',
                'Frances'
            ]
        ];

        return view('home', ['pessoas_linguas' => $data]);
    }
}
