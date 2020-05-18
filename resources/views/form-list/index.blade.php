@extends('layouts.master')
@section('content')
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Email</td>
                <td>Message</td>
                <td>Adresse IP</td>
            </tr>
        </thead>
        <tbody>
        @foreach($formulaires as $formulaire)
            <tr>
                <td>{{ $formulaire->id }}</td>
                <td>{{ $formulaire->lastname }}</td>
                <td>{{ $formulaire->firstname }}</td>
                <td>{{ $formulaire->email }}</td>
                <td>{{ $formulaire->message }}</td>
                <td>{{ $formulaire->ip_address }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
