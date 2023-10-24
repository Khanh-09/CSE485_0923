@extends('layout')

@section('title', 'Edit flower')
@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h4 class="float-start">Edit flower</h4>
            </div>
            <div class="col-lg-6 text-end">
                <a class="btn btn-primary" href="{{ route('flowers.index') }}">Back</a>
            </div>
        </div>

        <form action="{{ route('flowers.update',$flower->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{$flower->name}}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" class="form-control" value="{{$flower->description}}" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control" value="{{$flower->image}}" required>
            </div>
            <div class="form-group">
                <label for="origin">Origin:</label><br>
                <input type="text" name="origin" class="form-control" value="{{$flower->origin}}" required>
            </div>
            <div class="mb-3"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
@endsection