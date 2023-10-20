@extends('layout')
  
@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h4 class="float-start">Edit author</h4>
            </div>
            <div class="col-lg-6 text-end">
                <a class="btn btn-primary" href="{{ route('authors.index') }}">Back</a>
            </div>
        </div>
        <div class="mb-3"></div>
        <form action="{{ route('authors.update',$author->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" class="form-control" value="{{$author->name}}" required>
            </div>
            <div class="mb-3"></div>
            <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
@endsection