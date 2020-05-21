<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums AJAX - PHP</title>
    <link rel="stylesheet" href="dist/css/main.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="dist/img/spotify-logo.png" alt="logo">
            <input class="searchbar" type="text" placeholder="Cerca tra gli artisti">
        </header>
    
        <main>
            <div class="album">
            </div>
        </main>
    </div>

    <!-- Templates -->
    <script id="album-template" type="text/x-handlebars-template">
        <div class="album-details">
            <img class="album-cover" src="{{cover}}" alt="{{alt}}">
            <span class="title">{{title}}</span>
            <span class="author">{{author}}</span>
            <span class="year">{{year}}</span>
        </div>
    </script>
    <!-- Handlebars -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <!-- JS -->
    <script src="dist/js/main.js"></script>
</body>
</html>