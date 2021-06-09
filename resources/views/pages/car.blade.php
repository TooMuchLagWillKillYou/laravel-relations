@extends('layouts.main-layout')

@section('main')
<main>

    <div class="p-4 mt-4">
        <h2>{{ ucfirst($car -> name) }} <span>{{ ucfirst($car -> model) }}</span></h2>
        <p class="lead">{{ ucfirst($car -> brand -> name) }}</p>
    
        @foreach ($car -> pilots as $pilot)
        
            <a href="{{route('showPilot', $pilot -> id)}}">
                @if ($loop -> last)
                    {{ $pilot -> firstname }} {{ $pilot -> lastname }}
                @else
                    {{ $pilot -> firstname }} {{ $pilot -> lastname }} - 
                @endif
            </a>
                    
        @endforeach
        <br>
        <a href="{{ route('home') }}" class="btn btn-primary mt-4">Back Home</a>
    </div>

</main>
@endsection