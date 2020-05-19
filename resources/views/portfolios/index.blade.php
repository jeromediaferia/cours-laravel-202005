@extends('layouts.app')
@section('content')

    @foreach($portfolios as $portfolio)
        {{ $portfolio->title }}
    @endforeach

    {{ $portfolios->links() }}

@endsection
