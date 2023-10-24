@extends('layout')

@section('title', 'List Flowers')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h2 class="float-start"  >List Flowers</h2>
        </div>
        <div class="col-lg-6 text-end">
            <a class="btn btn-success"  href="{{ route('flowers.create') }}">Add a new flower</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-primary">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Origin</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($flowers as $flower)
                <tr>
                    <td class="text-center">{{ $flower->id }}</td>
                    <td><a class="text-decoration-none" href="{{ route('flowers.show',$flower->id) }}">{{ $flower->name}}</a></td>
                    <td>{{ $flower->description}}</td>
                    <td>{{ $flower->image}}</td>
                    <td>{{ $flower->origin }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary " href="{{ route('flowers.edit', $flower->id) }}">Edit</a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this flower?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
