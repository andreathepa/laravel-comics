<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="container my-2">
            <div class="flex justify-content-between align-items-center">
                <img src="{{ Vite::asset('resources/img/dc-logo.png')}}">
                <nav>
                    <ul>
                        
                    </ul>
                </nav>

            </div>
    </header>
   
</body>

</html>