<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Bolg</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div close='posts'>
            @foreach($posts as $post)
                 <div close='post'>
                     <a href='/posts/'{{ $post->id}}><h2 close='title'>{{ $post->title }}</h2></a>
                     <p class='body'>{{ $post->body }}</p>
                 </div>
            @endforeach
        </div>
        <div class='paginate'></div>
    
    </body>
</html>
