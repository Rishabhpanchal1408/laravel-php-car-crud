@extends('layout')
@section('data')
    <div class="container">
        <table class="table table-bordered w-50 mx-auto table-hover">
            <thead>
                <tr>
                    <th>Brand ID</th>
                    <th>Brand Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->brand_id }}</td>
                        <td>{{ $brand->brand_name }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="/brand/{{ $brand->brand_id }}/edit" class="btn btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="/brand/{{ $brand->brand_id }}" method="POST">
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
