@extends('layout')
@section('data')
    <div class="container">
        <table class="table table-bordered w-50 mx-auto table-hover">
            <thead>
                <tr>
                    <th>Color ID</th>
                    <th>Color Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colors as $color)
                    <tr>
                        <td>{{ $color->color_id }}</td>
                        <td>{{ $color->color_name }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="/color/{{ $color->color_id }}/edit" class="btn btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="/color/{{ $color->color_id }}" method="POST">
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
