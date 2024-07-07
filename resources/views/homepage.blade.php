@extends('layouts.homeLayout')

@section('content')

@foreach ($comics as $indice => $fumetto)
        <div class="cardFumetto">
            <ul>
                <li><h1>{{$fumetto['titolo']}}</h1></li>
                <li><img src="{{$fumetto['immagine']}}" alt=""></li>
                <li>Descrizione: {{$fumetto['descrizione']}}</li>
                <li>Capitoli: {{$fumetto['capitoli']}}</li>
                <li>Prezzo: {{$fumetto['prezzo']}}</li>
            </ul>
        </div>            
        @endforeach

@endsection