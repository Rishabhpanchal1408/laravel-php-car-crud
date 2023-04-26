@extends('layout')
@section('data')
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Car ID</th>
                    <th>Car Brand</th>
                    <th>Car Model</th>
                    <th>Car Color</th>
                    <th>Car Engine</th>
                    <th>Car Type</th>
                    <th>Car Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($car as $car)
                    <tr>
                        <td>{{ $car->car_id }}</td>
                        <td>{{ $car->brand->brand_name }}</td>
                        <td>{{ $car->car_model }}</td>
                        <td>{{ $car->color->color_name }}</td>
                        <td>{{ $car->engine->engine_name }}</td>
                        <td>{{ $car->type->type_name }}</td>
                        <td>{{ $car->car_price }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="/car/{{ $car->car_id }}/edit" class="btn btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="/car/{{ $car->car_id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
