@extends('layout')
@section('data')
    <div class="container">
        <table class="table table-bordered w-50 mx-auto table-hover">
            <thead>
                <tr>
                    <th>Type ID</th>
                    <th>Type Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->type_id }}</td>
                        <td>{{ $type->type_name }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="/type/{{ $type->type_id }}/edit" class="btn btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="/type/{{ $type->type_id }}" method="POST">
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
