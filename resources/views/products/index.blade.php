@extends('layout.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            @foreach($comics as $id => $comic)
            <div class="col-12 col-md-6 col-lg-3">
                <a href="{{ route('products.show', $id)}}">
                    <div class="card bg-transparent border-0 my-3 pointer">
                        <img class="img-fluidcard-img-top img-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                        <i class="my-2 text-uppercase text-white">{{ $comic['title'] }}</i>
                    </div>

                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
