@extends('layout')

@section('title', 'Flower details')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <h4 class="float-start">Flower details</h4>
    </div>
    <div?>
        <label for="name">Name: {{$flower->name}}</label>
    </div>
    <div>
        <label for="description">Description: {{$flower->description}}</label>
    </div>
    <div>
        <label for="image">Image: {{$flower->image}}</label>
    </div>
    <div>
        <label for="origin">Origin: {{$flower->origin}}</label><br>
    </div>
    <div class="mb-3"></div>
    <a href="{{ route('flowers.index') }}" class="btn btn-primary">Go back</a>
</div>
@endsection