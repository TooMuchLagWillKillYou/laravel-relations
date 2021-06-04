<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\Brand;
use App\Pilot;

class MyController extends Controller
{
    public function home(){

        $cars = Car::all();

        return view('pages.home', compact('cars'));
    }

    public function showCar($id){

        $car = Car::findOrFail($id);

        return view('pages.car', compact('car'));
    }

    public function showPilot($id){

        $pilot = Pilot::findOrFail($id);

        return view('pages.pilot', compact('pilot'));
    }

    public function createCar(){

        $brands = Brand::all();
        $pilots = Pilot::all();

        return view('pages.create', compact('brands', 'pilots'));
    }

    public function storeCar(Request $request){

        // dd($request -> all());

        $valid = $request -> validate([

            'name' => 'required|string|min:3',
            'model' => 'required|string|min:3',
            'kW' => 'required|integer|min:50|max:200'
        ]);

        $brand = Brand::findOrFail($request -> get('brand_id'));

        $car = Car::make($valid);
        $car -> brand() -> associate($brand);
        $car -> save();
        $car -> pilots() -> attach($request -> get('pilot_id'));
        $car -> save();

        return redirect() -> route('home');
    }
}
