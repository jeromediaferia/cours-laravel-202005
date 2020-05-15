<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class FormulaireController extends Controller
{
    public function index()
    {
        return view('formulaire.index');
    }
    public function store(Request $request)
    {
        $values = $request->all();
        $rules = [
            'email' => 'email|required',
            'lastname' => 'string',
            'firstname' => 'string',
            'message' => 'string',
        ];

        $validator = Validator::make($values, $rules,[
            'email.email' => 'Votre e-mail est invalide',
            'email.required' => 'Votre e-mail est obligatoire',
            'lastname.string' => 'Votre nom ne doit pas comporter de caractère spécial',
            'firstname.string' => 'Votre prénom ne doit pas comporter de caractère spécial',
            'message.string' => 'Votre message ne doit pas comporter de caractère spécial',
        ]);

        if($validator->fails()){
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        return '';
    }
}
