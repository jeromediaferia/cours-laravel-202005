@extends('layouts.master')
@section('content')
    @if(!empty($successMessage))
        <p>{{ $successMessage }}</p>
    @endif
    <hr>
    <div>
        <form action="" method="post">
            @csrf
            <input type="email" id="email" name="email" placeholder="email" value="{{ old('email') }}"
                   class="{{ $errors->has('email') ? ' has-error ' : '' }}">
            @if($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            <input type="text" id="lastname" name="lastname" placeholder="Nom">
            <input type="text" id="firstname" name="firstname" placeholder="Prénom">
            <textarea name="message" id="" cols="30" rows="10"></textarea>
            <button>Envoyer</button>
        </form>
    </div>
@endsection



