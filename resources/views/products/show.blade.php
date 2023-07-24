@extends('layout.app')

@section('content')
    <div class="container-fluid blue-band p-3 bg-primary">

    </div>
    <div class="container-fluid bg-white">
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="content position relative">
                                <img class="position-absolute top-50 start-30 show-image" src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                                <div>
                                    <i class="text-uppercase">{{ $comic['title'] }}</i>
                                    <p class="my-3">
                                        {{ $comic['description'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection