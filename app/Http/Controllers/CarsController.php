<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\Engine;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CarsController extends Controller
{
    public function index()
    {
        return view('car.index', [
            'car' => Car::orderBy('car_id')->get()
        ]);
    }

    public function create()
    {
        return view('car.create', [
            'brands' => Brand::get(),
            'colors' => Color::get(),
            'engines' => Engine::get(),
            'types' => Type::get()
        ]);
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'car_brand' => 'required',
            'car_model' => 'required',
            'car_color' => 'required',
            'car_engine' => 'required',
            'car_type' => 'required',
            'car_price' => 'required'
        ]);

        Car::create($formFields);

        return redirect('/car')->with('message', ['Car', ' Added Successfully!']);
    }

    public function edit(Car $car, Brand $brand)
    {
        return view('Car.edit', [
            'car' => $car,
            'brands' => Brand::get(),
            'colors' => Color::get(),
            'engines' => Engine::get(),
            'types' => Type::get()
        ]);
    }


    public function update(Request $request, Car $car)
    {
        $formFields = $request->validate([
            'car_model' => 'required',
            'car_brand' => 'required',
            'car_color' => 'required',
            'car_engine' => 'required',
            'car_type' => 'required',
            'car_price' => 'required'
        ]);

        $car->update($formFields);

        return redirect('/car')->with('message', ['CarDetails', ' Updated Successfully!']);
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/car')->with('message', ['Car', ' Deleted Successfully!']);
    }
}
