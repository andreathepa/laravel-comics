@extends('layout.app')

@section('content')
<div class="container my-5">
    <div class="container my-5">
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
    </div>
</div>
@endsection
