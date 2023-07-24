    @extends('layout.app')

    @section('content')
        <div class="container-fluid bg-dark">
            <div class="container py-5">
                <div class="row">
                    @foreach($comics as $comic)
                    <div class="col-10 col-md-6 col-lg-2">
                        <div class="card bg-transparent border-0 my-3 pointer">
                            <img class="img-fluidcard-img-top img-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                            <i class="my-2 text-uppercase text-white">{{ $comic['title'] }}</i>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="button_load p-3">
                    <a>LOAD MORE</a>
                </div>
            </div>

        </div>

        <div class="container-fluid py-5 bg-primary bg-gradient">
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <ul class="d-flex align-items-center">
                                    @foreach($icons as $icon)
                                        <li class="d-flex pointer">
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
    

        
    @endsection
    
