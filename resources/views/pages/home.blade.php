@extends('layouts.main-layout')

@section('main')
    @foreach ($cars as $car)
        <h2>{{ ucfirst($car -> name) }} - {{ ucfirst($car -> model) }}</h2>
        <p>{{ ucfirst($car -> brand -> name) }}</p>
        
        <p>
            @foreach ($car -> pilots as $pilot)
                {{ $pilot -> firstname }} {{ $pilot -> lastname }} - 

                @if ($loop -> last)
                {{ $pilot -> firstname }} {{ $pilot -> lastname }}
                @endif
            @endforeach
        </p>
    @endforeach
@endsection