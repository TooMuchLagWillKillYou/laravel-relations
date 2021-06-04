@extends('layouts.main-layout')

@section('main')
<main>

    <h2>{{ ucfirst($car -> name) }} <span>{{ ucfirst($car -> model) }}</span></h2>
    <p>{{ ucfirst($car -> brand -> name) }}</p>

    @foreach ($car -> pilots as $pilot)
    
        <a href="{{route('showPilot', $pilot -> id)}}">
            @if ($loop -> last)
                {{ $pilot -> firstname }} {{ $pilot -> lastname }}
            @else
                {{ $pilot -> firstname }} {{ $pilot -> lastname }} - 
            @endif
        </a>
                
    @endforeach
</main>
@endsection