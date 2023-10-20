@extends('layout')

@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h4 class="float-start">Books List</h4>
            </div>
            <div class="col-lg-6 text-end">
                <a class="btn btn-success" href="{{ route('books.create') }}">Add a new book</a>
            </div>
        </div>
        <div class="mb-3"></div>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Author_id</th>
                    <th>Title</th>
                    <th width="230px">Action</th>
                </tr>
            </thead>
            <tbody>
           @foreach ($books as $book)
                <tr>
                    <td class="text-center"><?php echo $book->id; ?></td>
                    <td class="text-center"><?php echo $book->author_id; ?></td>
                    <td><?php echo $book->title; ?></td>
                    <td class="text-center">
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" id="deleteForm-{{ $book->id }}">
                            <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="confirmDelete(event, {{ $book->id }})">Delete</button>
                        </form>
                        <script>
                            function confirmDelete(event, bookId) {
                                event.preventDefault();
                                if (confirm('Are you sure you want to delete this book?')) {
                                    document.getElementById('deleteForm-' + bookId).submit();
                                }
                            }
                        </script>
                    </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
@endsection
