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
        <div class="container my-5">
            <div class="row">
                @foreach($comics as $comic)
                <div class="col-10 col-md-6 col-lg-2">
                    <div class="card bg-transparent border-0 my-3">
                        <img class="img-fluidcard-img-top img-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                        <i class="my-2 text-uppercase text-white">{{ $comic['title'] }}</i>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="button_load">
            <a>LOAD MORE</a>
        </div>

        <div class="container-fluid my-5 bg-primary bg-gradient">
            <div class="row">
                <div class="col">
                    <div class="container p-5">
                        <div class="row">
                            <div class="col">
                                <ul class="d-flex align-items-center">
                                    @foreach($icons as $icon)
                                        <li class="d-flex">
                                            <div class="image_icon"><img src="{{ Vite::asset( $icon['icona'])}}" alt="{{ $icon['title']}}"></div>
                                            <div class="text-white d-flex align-items-center mx-4">{{ $icon['title'] }}</div>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    
</body>

</html>