@extends('layout')
@section('data')
    <div class="container">
        <table class="table table-bordered w-50 mx-auto table-hover">
            <thead>
                <tr>
                    <th>Engine ID</th>
                    <th>Engine Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($engines as $engine)
                    <tr>
                        <td>{{ $engine->engine_id }}</td>
                        <td>{{ $engine->engine_name }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="/engine/{{ $engine->engine_id }}/edit" class="btn btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="/engine/{{ $engine->engine_id }}" method="POST">
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
