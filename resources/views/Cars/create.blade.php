@extends('layout')
@section('data')
    <div class="container w-50 mx-auto mt-3">
        <form action="/car" method="POST">@csrf
            <div>
                <label class="form-label"><b>Car Brand</b></label>
                <input type="text" name="car_brand" class="form-control" placeholder="Enter Brand" />
                @error('car_brand')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div>
                <label class="form-label"><b>Car Model</b></label>
                <input type="text" name="car_model" class="form-control" placeholder="Enter Model" />
                @error('car_model')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div>
                <label class="form-label"><b>Car Color</b></label>
                <input type="text" name="car_color" class="form-control" placeholder="Enter Color" />
                @error('car_color')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div>
                <label class="form-label"><b>Car Engine</b></label>
                <input type="text" name="car_enigne" class="form-control" placeholder="Enter Engine" />
                @error('car_enigne')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div>
                <label class="form-label"><b>Car Type</b></label>
                <input type="text" name="car_type" class="form-control" placeholder="Enter Type" />
                @error('car_type')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <div>
                <label class="form-label"><b>Car Price</b></label>
                <input type="text" name="car_price" class="form-control" placeholder="Enter Price" />
                @error('car_price')
                    <p class="text-danger">Filled Cannot be Empty!</p>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary mt-2" />
        </form>
    </div>
@endsection
