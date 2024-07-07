<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="/style.css">
</head>


<body>

    <h1>Questa è la homepage</h1>

    <ul>
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
        <li>Prove terminate! Vedere i crediti (/about)</li>

    </ul>

</body>
</html>