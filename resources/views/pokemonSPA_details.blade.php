<div class="row">
    {{--Left blank--}}
    <div class="col-3"></div>

    {{--The main details card--}}
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title" style="font-weight: bold">
                    @php $name = ucfirst($pokemon['name']); @endphp
                    Name: {{ $name }}<br>
                    Height: {{ $pokemon['height'] }}<br>
                    Weight: {{ $pokemon['weight'] }}<br>
                </div>
            </div>
            <div class="card-body">

                {{--Carousel--}}
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color: #1b1e21;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 mx-auto" src="{{ $pokemon['sprites']['front_default'] }}" alt="first slide">
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
                {{--Display types--}}
                @foreach($pokemon['types'] as $item)
                    Slot: {{ $item['slot'] }} Type: {{ $item['type']['name'] }}
                    <br>
                @endforeach
                <hr>

                {{-- Display Stats --}}
                @foreach($pokemon['stats'] as $item)
                    Base stat: {{ $item['base_stat'] }}
                    <br>
                    Effort: {{ $item['effort'] }}
                    <br>
                    Name: {{ $item['stat']['name'] }}
                    <br>
                    URl: {{ $item['stat']['url'] }}
                    <br>
                    <hr>
                @endforeach

                {{-- Species sub-tasks --}}
                Species Name: {{ $pokemon['species']['name'] }}
                <br>
                Species URL: {{ $pokemon['species']['url'] }}

                {{-- Task 1 --}}
                <p>Capture Rate: {{ $species['capture_rate'] }}</p>

                {{-- Task 2 - display English flavour text for red, yellow and blue versions --}}
                @foreach($species['flavor_text_entries'] as $item)
                    @if($item['language']['name'] === 'en'
                        && ($item['version']['name'] === 'red'
                            || $item['version']['name'] === 'yellow'
                            || $item['version']['name'] === 'blue')
                    )
                        <p>{{ $item['flavor_text'] }}</p>
                    @endif
                @endforeach
                <hr>

                {{-- Task 3 - Only display English or French Pokemon names --}}
                @foreach($species['names'] as $item)
                    @if($item['language']['name'] == 'en')
                        <p>Pokemon English name: {{ $item['name'] }}</p>
                    @endif
                    @if($item['language']['name'] == 'fr')
                        <p>Pokemon French name: {{ $item['name'] }}</p>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    {{--Right blank--}}
    <div class="col-3"></div>
</div>
