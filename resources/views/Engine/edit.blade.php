@extends('layout')
@section('data')
    <div class="container w-50 mx-auto mt-3">
        <form action="/engine/{{ $engine->engine_id }}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label"><b>Engine Name</b></label>
            <input type="text" name="engine_name" class="form-control" placeholder="Enter Car Engine"
                value="{{ $engine->engine_name }}" />
            @error('engine_name')
                <p class="text-danger pt-2">Filled Cannot be Empty!</p>
            @enderror
            <input type="submit" class="btn btn-primary mt-2" />
        </form>
    </div>
@endsection
