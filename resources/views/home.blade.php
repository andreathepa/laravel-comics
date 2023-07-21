<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>


    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    @include('partials.jumbo')

    <div>
        <div class="container">
            <div class="row">
                @foreach($comics as $comic)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0">
                        <img class="img-fluid card-img-top" src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="button_load">
            <a>LOAD MORE</a>
        </div>
    </div>
   
</body>

</html>