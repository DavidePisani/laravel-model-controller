<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista Film da vedere</h1>

    @foreach ($movies as $movie)
    <div class="card">
        <h2>{{$movie->title}}</h2>
        <span>{{$movie->original_title}}</span>
        <div>{{$movie->nationality}}</div>
        <div>{{$movie->date}}</div>
        <div>{{$movie->vote}}</div>
    </div>
    <br>
    @endforeach
    
</body>
</html>