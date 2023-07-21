<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="container my-4">
        <div class="row">
            <div class="col-2">
                <div class="d-flex justify-content-center">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}">

                </div>

            </div>
            <div class="col">
                <div class="nav d-flex justify-content-center my-3">
                    <ul class="list-unstyled d-flex justify-content-center text-uppercase">
                        
                        <li class="nav-item mx-2">
                            <a class="nav-link {{ Route::currentRouteName() === 'homepage' ? 'fw-bold' : '' }}" href="/">
                                Homepage
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link {{ Route::currentRouteName() === 'link' ? 'fw-bold' : '' }}" href="/">
                                Comics
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link {{ Route::currentRouteName() === 'link' ? 'fw-bold' : '' }}" href="/">
                                Games
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link {{ Route::currentRouteName() === 'link' ? 'fw-bold' : '' }}" href="/">
                                Movies
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link {{ Route::currentRouteName() === 'link' ? 'fw-bold' : '' }}" href="/">
                                News
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link {{ Route::currentRouteName() === 'link' ? 'fw-bold' : '' }}" href="/">
                                Blog
                            </a>
                        </li>
                        <li>
                            <div class="input-group rounded">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            </div>
                        </li>
            
                    </ul>

                </div>

            </div>
        </div>
    </header>

    
   
</body>

</html>