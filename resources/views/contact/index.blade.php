@extends('layouts.master')

@section('scripts-header')
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eaque facere rem?
    </div>
    <hr>
    <div>
        <form action="" method="post">
            @csrf
            <label for="name">Votre nom</label>
            <input type="text" id="name" name="name" placeholder="Nom">
            <label for="firstname">Votre prénom</label>
            <input type="text" id="firstname" name="firstname" placeholder="Prénom">
            <button>Envoyer</button>
        </form>
    </div>
@endsection



