@extends('layout')

@section('title', 'Add a new flower')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h4 class="float-start">Add a new flower</h4>
        </div>
        <div class="col-lg-6 text-end">
            <a class="btn btn-primary" href="{{ route('flowers.index') }}">Back</a>
        </div>
    </div>

    <form action="{{ route('flowers.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="origin">Origin:</label><br>
            <input type="text" name="origin" class="form-control" required>
        </div>
        <div class="mb-3"></div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div> 
    </form>

@endsection