<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<body>

    <h2>Details</h2>

    {{-- Display front/back images --}}
    {{--<img src="{{ $data['sprites']['front_default'] }}">--}}
    {{--<img src="{{ $data['sprites']['back_default'] }}">--}}
    <br>

    {{-- Display types --}}
    {{--@foreach($data['types'] as $item)--}}
        {{--Slot: {{ $item['slot'] }} Type: {{ $item['type']['name'] }}--}}
        {{--<br>--}}
    {{--@endforeach--}}
    <br>


    {{-- Display Stats --}}
    @foreach($data['stats'] as $item)
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
    <br>

    {{--<p>Height: {{ $data['height'] }}</p>--}}
    {{--<p>Weight: {{ $data['weight'] }}</p>--}}

    <p>Species Name: {{ $data['species']['name'] }}</p>

    <p>Species URL: {{ $data['species']['url'] }}</p>

    {{-- Species sub-tasks --}}

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

    @php dd($species)@endphp
</body>
</html>
