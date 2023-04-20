@extends('layout')
@section('data')
    <div class="container w-50 mx-auto mt-3">
        <form action="/color/{{ $color->color_id }}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label"><b>Color Name</b></label>
            <input type="text" name="color_name" class="form-control" placeholder="Enter Car Color"
                value={{ $color->color_name }} />
            @error('color_name')
                <p class="text-danger pt-2">Filled Cannot be Empty!</p>
            @enderror
            <input type="submit" class="btn btn-primary mt-2" />
        </form>
    </div>
@endsection
