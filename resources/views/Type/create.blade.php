@extends('layout')
@section('data')
    <div class="container w-50 mx-auto mt-3">
        <form action="/type" method="POST">@csrf
            <label class="form-label"><b>Type Name</b></label>
            <input type="text" name="type_name" class="form-control" placeholder="Enter Car Type" />
            @error('type_name')
                <p class="text-danger pt-2">Filled Cannot be Empty!</p>
            @enderror
            <input type="submit" class="btn btn-primary mt-2" />
        </form>
    </div>
@endsection
