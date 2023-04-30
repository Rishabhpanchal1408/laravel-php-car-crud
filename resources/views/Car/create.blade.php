@extends('layout')
@section('data')
    <div class="container w-50 mx-auto border rounded-3 bg-light">
        <form action="/car" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="pt-2">
                <label class="form-label"><b>Car Brand</b></label>
                <select name="car_brand" class="form-select" placeholder="Enter Brand">
                    @foreach ($brands as $brand)
                        <option value={{ $brand->brand_id }}>{{ $brand->brand_name }}</option>
                    @endforeach
                </select>

                @error('car_brand')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Model</b></label>
                <input type="text" name="car_model" class="form-control" placeholder="Enter Model" />
                @error('car_model')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Color</b></label>
                <select name="car_color" class="form-select">
                    @foreach ($colors as $color)
                        <option value={{ $color->color_id }}>{{ $color->color_name }}</option>
                    @endforeach
                </select>
                @error('car_color')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Engine</b></label>
                <select name="car_engine" class="form-select">
                    @foreach ($engines as $engine)
                        <option value={{ $engine->engine_id }}>{{ $engine->engine_name }}</option>
                    @endforeach
                </select>
                @error('car_enigne')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Type</b></label>
                <select name="car_type" class="form-select">
                    @foreach ($types as $type)
                        <option value={{ $type->type_id }}>{{ $type->type_name }}</option>
                    @endforeach
                </select>
                @error('car_type')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Img</b></label>
                <input type="file" class="form-control" name="car_img">
                @error('car_type')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Price</b></label>
                <input type="text" name="car_price" class="form-control" placeholder="Enter Price" />
                @error('car_price')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="d-grid pt-2 pb-2">
                <input type="submit" class="btn btn-primary mt-2" />
            </div>
        </form>
    </div>
@endsection
