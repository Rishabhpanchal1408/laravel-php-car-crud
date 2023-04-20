<?php

namespace App\Http\Controllers;

use App\Models\CarDetails;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        return view('cars.index', [
            'cars' => CarDetails::get()
        ]);
    }
}
