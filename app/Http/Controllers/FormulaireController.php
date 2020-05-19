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

    public function singleEntry()
    {
        // Récupérer qu'une seule entrée de la base de données
//        $formulaire = FormModel::find(1)->getAttributes();
//        dd($formulaire);
        // Récupérer qu'une seule entrée dont l'email est
        $formulaire = FormModel::where('email', 'test@test.com')->first();

//        dd($formulaire);
        // Renvoyer la vue form-list avec les valeurs de la variable $formulaire
        return view('form-list.index')->with('formulaire', $formulaire);

    }

    public function update()
    {
        // Récupérer l'email test@test.com et changer le premier élément que l'on trouve dans la bdd par un autre email
        $formulaire = FormModel::where('email', 'test@test.com')->first();
        $formulaire->email = 'toto@test.com';

        // On sauvegarde dans la table
        $formulaire->save();
    }

    public function delete()
    {
        // On sélectionne le premier élément de la base de données
        $formulaire = FormModel::find(1);

        // On supprime
        $formulaire->delete();
    }
}
