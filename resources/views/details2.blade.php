@extends('layouts.app')

@section('contents')
    <div class="jumbotron text-center">
        <h2>Details v2</h2>
    </div>

    <a class="btn btn-success" href="{{ url('/pokemon2') }}" role="button">Go Back</a>

    <div class="row">
        {{--Left blank--}}
        <div class="col-4"></div>

        {{--The main details card--}}
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="font-weight: bold">
                        @php $name = ucfirst($pokemon['name']); @endphp
                        Name: {{ $name }}<br>
                        Height: {{ $pokemon['height'] }}<br>
                        Weight: {{ $pokemon['weight'] }}<br>
                    </div>
                </div>
                {{--<img class="card-img-top w-25" src="{{ $pokemon['sprites']['front_default'] }}" alt="First slide">--}}
                <div class="card-body">

                    {{--Carousel--}}
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color: #1b1e21;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-50 mx-auto" src="{{ $pokemon['sprites']['front_default'] }}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block"><h5>front</h5></div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-50 mx-auto" src="{{ $pokemon['sprites']['back_default'] }}" alt="second slide">
                                <div class="carousel-caption d-none d-md-block"><h5>back</h5></div>
                            </div>
                        </div>

                        {{--Carousel Controls--}}
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
                <div class="card-footer">
                    {{-- Display types --}}
                    @foreach($pokemon['types'] as $item)
                        Slot: {{ $item['slot'] }} Type: {{ $item['type']['name'] }}
                        <br>
                    @endforeach
                </div>
            </div>
        </div>

        {{--Right Blank--}}
        <div class="col-4"></div>
    </div><!-- end of row -->

    <div>
        <h4>Stat</h4>
        <select id="statSelect" onchange="return showStat();">
            <option selected="selected">Please Select</option>
            @foreach($pokemon['stats'] as $item)
                <option>{{ $item['stat']['name'] }}</option>
            @endforeach
        </select>

        base <input type="text" id="base" name="base">
        effort <input type="text" id="effort" name="effort">
        name <input type="text" id="name" name="name">
        url <input type="text" id="url" name="url" value="url">

    </div>





    {{-- Display Stats --}}
    @foreach($pokemon['stats'] as $item)
        <br>
        Base stat: {{ $item['base_stat'] }}
        <br>
        Effort: {{ $item['effort'] }}
        <br>
        Name: {{ $item['stat']['name'] }}
        <br>
        URl: {{ $item['stat']['url'] }}
        <br>
    @endforeach

    <hr>

    <div class="row">
        <div class="col-sm-8" style="background-color: yellow;">
            {{-- Display Name, height and weight --}}
            <p>Name: {{ $pokemon['name'] }}</p>
            <p>Height: {{ $pokemon['height'] }}</p>
            <p>Weight: {{ $pokemon['weight'] }}</p>

            {{-- Display types --}}
            @foreach($pokemon['types'] as $item)
                Slot: {{ $item['slot'] }} Type: {{ $item['type']['name'] }}
                <br>
            @endforeach

            {{-- Display Stats --}}
            @foreach($pokemon['stats'] as $item)
                <br>
                Base stat: {{ $item['base_stat'] }}
                <br>
                Effort: {{ $item['effort'] }}
                <br>
                Name: {{ $item['stat']['name'] }}
                <br>
                URl: {{ $item['stat']['url'] }}
                <br>
            @endforeach
        </div>
    </div>



@endsection