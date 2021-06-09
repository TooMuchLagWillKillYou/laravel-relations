@extends('layouts.main-layout')

@section('main')

    <a href="{{ route('createCar') }}" class="btn btn-primary my-3 mx-auto">Add new</a>

    <div class="row">
        @foreach ($cars as $car)
            <div class="col-4 card card-body">
                <a href="{{ route('showCar', $car -> id) }}">
                    <h5 class="card-title">{{ ucfirst($car -> name) }} - {{ ucfirst($car -> model) }}</h5>
                </a>
        
                <h6 class="card-subtitle">{{ ucfirst($car -> brand -> name) }}</h6>
                
                <p class="card-text mt-2">
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
            </div>
        @endforeach
    </div>
        
@endsection
