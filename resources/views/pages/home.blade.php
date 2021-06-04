@extends('layouts.main-layout')

@section('main')

    <a href="{{ route('createCar') }}">
        <button>Add new</button>
    </a>

    @foreach ($cars as $car)
        <a href="{{ route('showCar', $car -> id) }}">
            <h2>{{ ucfirst($car -> name) }} - {{ ucfirst($car -> model) }}</h2>
        </a>

        <p>{{ ucfirst($car -> brand -> name) }}</p>
        
        <p>
            @foreach ($car -> pilots as $pilot)
                
                <a href="{{route('showPilot', $pilot -> id)}}">
                    @if ($loop -> last)
                    {{ $pilot -> firstname }} {{ $pilot -> lastname }}
                    @else
                        {{ $pilot -> firstname }} {{ $pilot -> lastname }} - 
                    @endif
                </a>
                
            @endforeach
        </p>
    @endforeach
        
@endsection
