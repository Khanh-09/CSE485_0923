@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h4 class="float-start">Add a new author</h4>
        </div>
        <div class="col-lg-6 text-end">
            <a class="btn btn-success" href="{{ route('authors.index') }}">Back</a>
        </div>
    </div>
    <div class="mb-3"></div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3"></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection