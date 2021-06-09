@extends('layouts.main-layout')

@section('main')
<main>

    <div class="p-4 mt-4">
        <h2>{{ $pilot -> firstname }} {{ $pilot -> lastname }}</h2>
    
        @foreach ($pilot -> cars as $car)
            <p class="lead">
                {{ ucfirst($car -> name) }}
                {{ ucfirst($car -> model) }}
            </p>
        @endforeach
    </div>

</main>
@endsection