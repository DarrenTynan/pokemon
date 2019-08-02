{{-- pokemonSPA --}}
{{-- The idea is for a single page app --}}

@extends('layouts.app')

@section('contents')
    <div class="jumbotron text-center">
        <h2>Pokemon SPA</h2>
        <p>The idea is for a Single Page App, whereby you select a Pokemon name from the drop-down and after clicking Get Details, then further details are show below. </p>
    </div>

    {{--@php dd($pokemon); @endphp--}}
    <div>
        {!! Form::open(['action' => 'PageController@getDetails', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('id', 'Select a Pokemon...') !!}
            <select class="form-control" name="id">
                @foreach($pokemons['results'] as $item)
                    <option>{{ $item['name'] }}</option>
                @endforeach
            </select>
        </div>

        {!! Form::submit('Get Details', ['class' => 'btn btn-info']) !!}

        {!! Form::close() !!}
    </div>

    {{-- If pokemon and species set, then we are returning details. --}}
    @if(isset($pokemon))
        @include('pokemonSPA_details')
    @endif
    <br>
@endsection
