@extends('layout')

@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h4 class="float-start">Authors List</h4>
            </div>
            <div class="col-lg-6 text-end">
                <a class="btn btn-success" href="{{ route('authors.create') }}">Add a new author</a>
            </div>
        </div>
        <div class="mb-3"></div>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
           @foreach ($authors as $author)
                <tr>
                    <td class="text-center">{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td class="text-center">
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" id="deleteForm-{{ $author->id }}">
                            <a class="btn btn-primary" href="{{ route('authors.edit', $author->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="confirmDelete(event, {{ $author->id }})">Delete</button>
                        </form>
                        <script>
                            function confirmDelete(event, authorId) {
                                event.preventDefault();
                                if (confirm('Are you sure you want to delete this author?')) {
                                    document.getElementById('deleteForm-' + authorId).submit();
                                }
                            }
                        </script>
                    </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
@endsection

