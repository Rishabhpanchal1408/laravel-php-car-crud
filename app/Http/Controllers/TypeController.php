<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        return view('type.index', [
            'types' => Type::orderBy('type_id')->get()
        ]);
    }

    public function create()
    {
        return view('type.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'type_name' => 'required'
        ]);

        Type::create($formFields);

        return redirect('/type')->with('message', ['Type', ' Added Successfully!']);
    }

    public function destroy(Type $type)
    {
        $type->delete();
        return redirect('/type')->with('message', ['Type', ' Deleted Successfully!']);
    }

    public function edit(Type $type)
    {
        return view('type.edit', ['type' => $type]);
    }

    public function update(Request $request, Type $type)
    {
        $formFields = $request->validate([
            'type_name' => 'required'
        ]);
        $type->update($formFields);

        return redirect('/type')->with('message', ['Type', ' Updated Successfully!']);
    }
}
