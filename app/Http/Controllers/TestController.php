<?php

// On utilise un espace de nom pour notre Class
namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        return 'toto';
    }

    public function message()
    {
        $information = 'Voici une information';
        $prenom = '';

        return view('layouts.master')
                ->with('information', $information)
                ->with('prenom', $prenom);
    }
}
