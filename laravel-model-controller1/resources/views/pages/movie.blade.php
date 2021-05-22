@extends('layouts.main_layout')
@section('content')
    <div id="movie">
        <div class="container flex_col align_cen">
            <h1>&#160{{ $movie['title'] }}&#160</h1>
            <h5>Titolo Originale: {{ $movie['original_title'] }}</h5>
            <h3>Data Uscita: {{ $movie['date'] }}</h3>
            <h3>Nazionalità: {{ $movie['nationality'] }}</h3>
        </div>
    </div>
@endsection
