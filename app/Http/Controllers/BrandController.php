<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('brand.index', [
            'brands' => Brand::orderBy('brand_id')->get()
        ]);
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'brand_name' => 'required'
        ]);

        Brand::create($formFields);

        return redirect('/brand')->with('message', ['Brand', ' Added Successfully!']);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect('/brand')->with('message', ['Brand', ' Deleted Successfully!']);
    }

    public function edit(Brand $brand)
    {
        return view('brand.edit', ['brand' => $brand]);
    }

    public function update(Request $request, Brand $brand)
    {
        $formFields = $request->validate([
            'brand_name' => 'required'
        ]);

        $brand->update($formFields);

        return redirect('/brand')->with('message', ['Brand', ' Updated Successfully!']);
    }
}
