@extends('layouts.default')

@section('content')

<div class="container">
    <h3>Employees</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Position</th>
                <th>Grade</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection
