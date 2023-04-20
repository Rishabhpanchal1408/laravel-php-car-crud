<?php

namespace App\Http\Controllers;

use App\Models\Engine;
use Illuminate\Http\Request;

class EngineController extends Controller
{
    //    To get All 
    public function index()
    {
        return view('engine.index', [
            'engines' => Engine::orderBy('engine_id')->get()
        ]);
    }

    //    To Create 
    public function create()
    {
        return view('engine.create');
    }

    // To Store 
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'engine_name' => 'required'
        ]);

        Engine::create($formFields);
        return redirect('/engine')->with('message', ['Engine', ' Added Successfully!']);
    }
    // To Edit
    public function edit(Engine $engine)
    {
        return view('engine.edit', ['engine' => $engine]);
    }

    // To Update
    public function update(Request $request, Engine $engine)
    {
        $formFields = $request->validate([
            'engine_name' => 'required'
        ]);

        $engine->update($formFields);
        return redirect('/engine')->with('message', ['Engine', ' Updated Successfully!']);
    }
    // To Delete
    public function destroy(Engine $engine)
    {
        $engine->delete();
        return redirect('/engine')->with('message', ['Engine', ' Deleted Successfully!']);
    }
}
