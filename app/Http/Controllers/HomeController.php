<?php

namespace App\Http\Controllers;

use App\Models\CarDetails;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'cars' => CarDetails::get()
        ]);
    }
}
