<?php

namespace App\Http\Controllers;

use App\Model\Formulaire;
use Illuminate\Http\Request;

class FormListController extends Controller
{
    public function index()
    {
        $formulaires = Formulaire::all();

        return view('form-list.index')->with('formulaires', $formulaires);
    }
}
