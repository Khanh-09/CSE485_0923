@extends('layout')
  
@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h4 class="float-start">Add a new book</h4>
            </div>
            <div class="col-lg-6 text-end">
                <a class="btn btn-success" href="{{ route('books.index') }}">Back</a>
            </div>
        </div>
        <div class="mb-3"></div>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="author_id">Author ID: </label>
                <input type="text" name="author_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3"></div>
            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
@endsection