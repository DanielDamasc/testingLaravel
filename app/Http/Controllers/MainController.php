<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView()
    {
        return view('home');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'nome' => 'required'
        ]);
    }
}