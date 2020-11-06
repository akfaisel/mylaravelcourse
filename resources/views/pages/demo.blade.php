<h1>This is demo page</h1>


<p>Patient Name is {{ $name }}</p>
<p>Age is {{ $age }}</p>
<p>Blood Group is {{ $blood }}</p>

@if($category == 'doctor')
    <p>He is a Doctor</p>
@elseif($category == 'patient')
    <p>He is a Patient</p>
@elseif($category == 'nurse')
    <p>She is a Nurse</p>
@endif

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Class</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['age'] }}</td>
            <td>{{ $user['std'] }}</td>
        </tr>
        @endforeach
    </tbody>

</table>




