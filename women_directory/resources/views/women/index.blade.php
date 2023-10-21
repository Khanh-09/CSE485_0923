@extends('layout')

@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h4 class="float-start">List Women</h4>
            </div>
            <div class="col-lg-6 text-end">
                <a class="btn btn-success" href="{{ route('women.create') }}">Add a new woman</a>
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
                    <th>Biography</th>
                    <th>Field of work</th>
                    <th>Image</th>
                    <th>Birth date</th>
                    <th  style="width:160px">Action</th>
                </tr>
            </thead>
            <tbody>
           @foreach ($women as $woman)
                <tr>
                    <td class="text-center">{{ $woman->id }}</td>
                    <td>{{ $woman->name }}</td>
                    <td>{{ $woman->biography }}</td>
                    <td>{{ $woman->field_of_work }}</td>
                    <td>{{ $woman->image }}</td>
                    <td>{{ $woman->birth_date }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <form action="{{ route('women.destroy', $woman->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('women.edit', $woman->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this woman?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
@endsection

