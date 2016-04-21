<!DOCTYPE HTML>
<html lang="ru-RU">
    <head>
        <meta charset="UTF-8">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
        <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
    </head>
    <body>
        
    <div class="container">
        
        <h1 class="text-center">

            {{ isset($pagetitle) ? $pagetitle : 'Гостьова книга'}}
            
        </h1>
        <hr/>

       @yield('content')
   
        </div>    
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>