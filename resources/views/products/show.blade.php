@extends('layout.app')

@section('content')
    <div class="container-fluid blue-band p-3 bg-primary">

    </div>
    <div class="container-fluid bg-white">
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10 mx-auto">
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

    <div class="container-fluid bg-light bg-gradient p-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>Talent</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>Art by:</th>
                                    <td>
                                    @foreach ($comic['artists'] as $artist)
                                        {{ $artist }}<br>
                                    @endforeach
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>Written by:</th>
                                    <td>
                                    @foreach ($comic['writers'] as $artist)
                                        {{ $artist }}<br>
                                    @endforeach
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <div class="col">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>Specs</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>Series:</th>
                                    <td>{{ $comic['series'] }}</td>
                                  </tr>
                                  <tr>
                                    <th>U.S. Price:</th>
                                    <td>{{ $comic['price'] }}</td></td>
                                  </tr>
                                  <tr>
                                    <th>On sale date:</th>
                                    <td>{{ $comic['sale_date'] }}</td></td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection