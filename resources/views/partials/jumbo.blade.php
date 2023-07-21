<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div>
        <div class="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
        </div>
       
    </div>

    
   
</body>

</html>