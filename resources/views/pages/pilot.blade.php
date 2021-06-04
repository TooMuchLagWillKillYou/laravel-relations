@extends('layouts.main-layout')

@section('main')
<main>

    <h2>{{ $pilot -> firstname }} {{ $pilot -> lastname }}</h2>

    @foreach ($pilot -> cars as $car)
        {{ ucfirst($car -> name) }}
        {{ ucfirst($car -> model) }}
    @endforeach

</main>
@endsection