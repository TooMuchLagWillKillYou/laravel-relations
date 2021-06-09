@extends('layouts.main-layout')

@section('main')
<main>

    <h2 class="my-5">Create new car</h2>

    <div class="input-form">
        <form action="{{ route('storeCar') }}" method="post">
        
            @csrf
            @method('POST')
    
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name" id="name"class="form-control">
            </div>
            
            <div class="form-group">
                <label for="model">Model</label>
                <input type="model" name="model" id="model"class="form-control">
            </div>
            
            <div class="form-group">
                <label for="kW">kW</label>
                <input type="kW" name="kW" id="kW"class="form-control">
            </div>
    
            <div class="form-group">
                <label for="brand_id">Brand</label>
                <select name="brand_id" id="brand_id"class="form-control">
                    <option selected="selected">Brand</option>
                    @foreach ($brands as $brand)
                    <option value="{{ $brand -> id }}">{{ ucfirst($brand -> name) }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="form-group">
                <label for="pilot_id[]">Pilots</label>
                <select name="pilot_id[]" id="pilot_id[]" class="form-control" multiple>
                    @foreach ($pilots as $pilot)
                    <option value="{{ $pilot -> id }}">
                        {{ $pilot -> firstname }}
                        {{ $pilot -> lastname }}
                    </option>
                    @endforeach
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>    

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</main>
@endsection

