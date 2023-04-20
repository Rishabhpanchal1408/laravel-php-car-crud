<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        return view('color.index', [
            'colors' => Color::orderBy('color_id')->get()
        ]);
    }

    public function create()
    {
        return view('color.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'color_name' => 'required'
        ]);

        Color::create($formFields);

        return redirect('/color')->with('message', ['Color', ' Added Successfully!']);
    }

    public function destroy(Color $color)
    {
        $color->delete();
        return redirect('/color')->with('message', ['Color', ' Deleted Successfully!']);
    }

    public function edit(Color $color)
    {
        return view('color.edit', ['color' => $color]);
    }

    public function update(Request $request, Color $color)
    {
        $formFields = $request->validate([
            'color_name' => 'required'
        ]);

        $color->update($formFields);

        return redirect('/color')->with('message', ['Color', ' Updated Successfully!']);
    }
}
