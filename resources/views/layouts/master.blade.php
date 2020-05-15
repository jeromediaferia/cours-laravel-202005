<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('scripts-header')
</head>
<body>
{{-- Voici un commentaire blade --}}
{{--En PHP lorsque je veux afficher quelque chose je dois le faire avec echo --}}
{{--<p><?php echo $prenom; ?></p>--}}
{{--Avec blade je le fais avec {{ $maVar }}--}}
{{--<p>{{ $prenom }}</p>--}}
{{--{{ $information }}--}}
layouts
<div id="content">
    @yield('content')
</div>

@yield('scripts-footer')
</body>
</html>
