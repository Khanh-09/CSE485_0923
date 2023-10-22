@extends('layout')

@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h4 class="float-start">List Authors</h4>
            </div>
            <div class="col-lg-6 text-end">
                <a class="btn btn-success" href="{{ route('authors.create') }}">Add a new author</a>
                <a class="btn btn-primary" href="{{ route('books.index') }}">List Books</a>
            </div>
        </div>
        <div class="mb-3"></div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody >
           @foreach ($authors as $author)
                <tr>
                    <td class="text-center">{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('authors.edit', $author->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this author?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
@endsection

