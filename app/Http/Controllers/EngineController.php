<?php

namespace App\Http\Controllers;

use App\Models\Engine;
use Illuminate\Http\Request;

class EngineController extends Controller
{
    public function index()
    {
        return view('engine.index', [
            'engines' => Engine::orderBy('engine_id')->get()
        ]);
    }

    public function create()
    {
        return view('engine.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'engine_name' => 'required'
        ]);

        Engine::create($formFields);
        return redirect('/engine')->with('message', ['Engine', ' Added Successfully!']);
    }

    public function destroy(Engine $engine)
    {
        $engine->delete();
        return redirect('/engine')->with('message', ['Engine', ' Deleted Successfully!']);
    }

    public function edit(Engine $engine)
    {
        return view('engine.edit', ['engine' => $engine]);
    }
    public function update(Request $request, Engine $engine)
    {
        $formFields = $request->validate([
            'engine_name' => 'required'
        ]);

        $engine->update($formFields);
        return redirect('/engine')->with('message', ['Engine', ' Updated Successfully!']);
    }
}
