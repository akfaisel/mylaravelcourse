@extends('layouts.default')

@section('content')

<div class="container">
    <h3>Employees</h3>

    <a href="employees/create" class="btn btn-primary float-right mb-2">Add Employee</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Position</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->age }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->position }}</td>
                <td>{{ $row->grade }}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="employees/{{ $row->id }}/edit">Edit</a>
                            <a class="dropdown-item" href="employees/{{ $row->id }}/delete">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection
