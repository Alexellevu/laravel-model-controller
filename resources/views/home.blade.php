<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            
            body{
                background-color: cyan;
                font-family:sans-serif;
            }
            .card{
                background-color: green;
                color: white;
                border-radius: 5px;
                width: 200px;
                margin: 5px 10px;
                padding: 5px 12px;
                border: 2px solid black;
            }

            .movies{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                
                margin: auto;
            }

            h1{
                text-align: center;
                font-size:70px;
                color: green;
            }
        </style>
        
    </head>
    
    <body>
           <h1>Movies Archive</h1>
            <div class="movies">
            @foreach($movies as $movie)
           
                <div class="card">
                        <h2>{{$movie->title}}</h2>
                        <h4>Original title: {{$movie->original_title}}</h4>
                        <p>Nationality: {{$movie->nationality}}</p>
                        <p>Release Date: {{$movie->date}} </p>
                        <p> Vote: {{$movie->vote}}</p>
                </div>
            @endforeach
            </div>
    </body>
</html>
