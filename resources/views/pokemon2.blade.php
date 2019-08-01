@extends('layouts.app')

@section('contents')
    <div class="jumbotron text-center">
        <h2>Pokemon v2</h2>
    </div>

    <div>
        {!! Form::open(['action' => 'PageController@compact', 'method' => 'GET']) !!}

        <div class="form-group">
            {!! Form::label('id', 'Select a Pokemon...') !!}
            <select class="form-control" name="id">
                @foreach($data['results'] as $item)
                    <option>{{ $item['name'] }}</option>
                @endforeach
            </select>
        </div>

        {!! Form::submit('Get Details', ['class' => 'btn btn-info']) !!}

        {!! Form::close() !!}
    </div>

    <hr>

@endsection

@section('ulist')
    <div>
        <ul>
            @foreach($data['results'] as $item)
                <li><a href="{{ url('/details2', $item['name']) }}"> {{ $item['name'] }}</a></li>
                {{--<li><a href="{{ $item['url'] }}"> {{ $item['name'] }}</a></li>--}}
            @endforeach
        </ul>
    </div>
@endsection

@section('details')
    <h3>Insert details card here</h3>
@endsection