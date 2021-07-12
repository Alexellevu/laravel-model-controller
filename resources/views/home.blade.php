<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    
    <body>
           <h1>Archivio film</h1>

            @foreach($movies as $movie)

                <div class="card">
                        <h3>{{$movie->title}}</h3>
                        <h5>Original title: {{$movie->original_title}}</h5>
                        <p>Nationality: {{$movie->nationality}}</p>
                        <span>Release Date: {{$movie->date}} - </span>
                        <span> Vote: {{$movie->vote}}</span>
                </div>
            @endforeach
    </body>
</html>
