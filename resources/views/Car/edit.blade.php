@extends('layout')
@section('data')
    <div class="container w-50 mx-auto border rounded-3 bg-light">
        <form action="/car/{{ $car->car_id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="pt-2">
                <label class="form-label"><b>Car Brand</b></label>
                <select name="car_brand" class="form-select" value={{ $car->car_brand }}>
                    @foreach ($brands as $brand)
                        <option value={{ $brand->brand_id }} {{ $brand->brand_id == $car->car_brand ? 'selected' : '' }}>
                            {{ $brand->brand_name }}</option>
                    @endforeach
                </select>

                @error('car_brand')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Model</b></label>
                <input type="text" name="car_model" class="form-control" placeholder="Enter Model"
                    value={{ $car->car_model }} />
                @error('car_model')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Color</b></label>
                <select name="car_color" class="form-select" value={{ $car->car_color }}>
                    @foreach ($colors as $color)
                        <option value={{ $color->color_id }} {{ $color->color_id == $car->car_color ? 'selected' : '' }}>
                            {{ $color->color_name }}</option>
                    @endforeach
                </select>
                @error('car_color')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Engine</b></label>
                <select name="car_engine" class="form-select" value={{ $car->car_engine }}>
                    @foreach ($engines as $engine)
                        <option value={{ $engine->engine_id }}
                            {{ $engine->engine_id == $car->car_engine ? 'selected' : '' }}>
                            {{ $engine->engine_name }}</option>
                    @endforeach
                </select>
                @error('car_enigne')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Type</b></label>
                <select name="car_type" class="form-select" value={{ $car->car_type }}>
                    @foreach ($types as $type)
                        <option value={{ $type->type_id }} {{ $type->type_id == $car->car_type ? 'selected' : '' }}>
                            {{ $type->type_name }}</option>
                    @endforeach
                </select>
                @error('car_type')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div class="pt-2">
                <label class="form-label"><b>Car Price</b></label>
                <input type="text" name="car_price" class="form-control" placeholder="Enter Price"
                    value={{ $car->car_price }} />
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
