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

    <main>
        <div class="container my-4">
            <div class="row">
                @foreach($comics as $comic)
                <div class="col-10 col-md-6 col-lg-2">
                    <div class="card border-0 my-3">
                        <img class="img-fluid card-img-top img-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                        <i class="my-2 text-uppercase">{{ $comic['title'] }}</i>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="button_load">
            <a>LOAD MORE</a>
        </div>

        <div class="container_icons">
            <div class="footer_blue flex justify-content-between align-items-center">
                @foreach($icons as $icon)

                 <a class="flex align-items-center margin-left">

                    <div class="image_icon"><img src="{{ $icon['icona'] }}" alt="{{ $icon['title']}}"></div>
                 </a>

                 @endforeach

            </div>
        </div>
    </main>
   
</body>

</html>