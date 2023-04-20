@extends('layout')
@section('data')
    <div class="container w-50 mx-auto mt-3">
        <form action="/brand/{{ $brand->brand_id }}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label"><b>Brand Name</b></label>
            <input type="text" name="brand_name" class="form-control" placeholder="Enter Car Brand"
                value={{ $brand->brand_name }} />
            @error('brand_name')
                <p class="text-danger pt-2">Filled Cannot be Empty!</p>
            @enderror
            <input type="submit" class="btn btn-primary mt-2" />
        </form>
    </div>
@endsection
