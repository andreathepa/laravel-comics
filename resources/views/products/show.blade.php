@extends('layout.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection