<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon</title>
</head>
<body>

    <h2>Pokemon<h2>
    <div>
        <ul>
            @foreach($data['results'] as $item)
                <li><a href="{{ url('/details', $item['name']) }}"> {{ $item['name'] }}</a></li>
                {{--<li><a href="{{ $item['url'] }}"> {{ $item['name'] }}</a></li>--}}
            @endforeach
        </ul>
    </div>

    <div>
        <select>
            <option>Please Select</option>
            @foreach($data['results'] as $item)
                <option>{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>
</body>
</html>
