<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crediti</title>
    <link rel="stylesheet" href="/style.css">
</head>


<body>

    <h1>Questi sono i crediti:</h1>
    <h2>{{$author}}</h2>
    <ul>
        @foreach ($persone as $item)
            <li>
                <a href=" {{$item['link']}} "> {{$item['text']}} </a>
            </li>
        @endforeach
    </ul>

</body>
</html>