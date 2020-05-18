<?php

namespace App\Http\Controllers;

use App\Mail\Formulaire;
use App\Model\Formulaire as FormModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

        $formulaire = new FormModel();
        $formulaire->lastname = $values['lastname'];
        $formulaire->firstname = $values['firstname'];
        $formulaire->email = $values['email'];
        $formulaire->message = $values['message'];
        $formulaire->ip_address = '127.0.0.1';
        $formulaire->save();


        $title = 'Formulaire de contact';
        $content = $values['lastname'] . ' - ' . $values['firstname'] . '<br>' . $values['message'];

        Mail::to($values['email'])->send(new Formulaire($title, $content));

        return view('formulaire.index')
            ->with('successMessage', 'Message envoyé !');
    }
}
