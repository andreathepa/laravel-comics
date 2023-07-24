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
                                    <h2 class="text-uppercase text-primary">{{ $comic['title'] }}</h2>
                                    <div class="p-3 bg-success container">
                                      <div class="row">
                                        <div class="col-8">
                                          <div class="row d-flex justify-content-between">
                                            <div class="col d-flex justify-content-between">
                                              U.S. Price: {{ $comic['price'] }}
                                            </div>
                                            <div class="col text-end text-uppercase">
                                              Avaiable
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col text-end">
                                          Check aviability
                                        </div>
                                      </div>

                                    </div>
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

    {{-- <div class="container-fluid bg-light bg-gradient p-5">
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
    </div> --}}

    <div class="container-fluid bg-light bg-gradient p-5">
      <div class="container my-5">
          {{-- First row col Talent --}}
          <div class="row">
              <div class="col">
                <h2 class="mb-4 text-primary px-3">Talent</h2>
                <div>
                  <div class="row border-top border-bottom p-3">
                    {{-- First row col art by --}}
                    <div class="col-3">
                      <div class="fw-bold p-3">Art by:</div>
                    </div>
                    {{-- First row col art by description --}}
                    <div class="col">
                      <div class="p-3 text-info">
                        @foreach (
                          $comic['artists'] as $artist){{ $artist }}<br>
                        @endforeach

                      </div>
                    </div>
                  </div>

                  {{-- Second row col written by --}}
                  <div class="row border-bottom p-3">
                    <div class="col-3">
                      <div class="fw-bold p-3">Written by:</div>
                    </div>
                    {{-- Second row col written by description --}}
                    <div class="col">
                      <div class="p-3 text-info">
                        @foreach (
                          $comic['writers'] as $artist){{ $artist }}<br>
                        @endforeach

                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="col">
                <h2 class="mb-4 text-primary px-3">Specs</h2>
                <div>
                  <div class="row border-top border-bottom p-3">
                    <div class="col-3">
                      <div class="fw-bold p-3">Series:</div>
                    </div>
                    <div class="col">
                      <div class="p-3 text-info">{{ $comic['series'] }}</div>
                    </div>
                  </div>

                  {{-- Second row written by --}}
                  <div class="row border-bottom p-3">
                    <div class="col-3">
                      <div class="fw-bold p-3">U.S. Price:</div> 
                    </div>
                    <div class="col">
                      <div class="p-3 text-info">{{ $comic['price'] }}</div>
                    </div>
                    
                  </div>
                  <div class="row border-bottom p-3">
                    <div class="col-3">
                      <div class="fw-bold p-3">On sale date:</div> 
                    </div>
                    <div class="col">
                      <div class="p-3 text-info">{{ $comic['sale_date'] }}</div>
                    </div>
                    
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
@endsection