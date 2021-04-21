<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
<h2>Student Details</h2>
<form action="{{ route('student.create') }}">
    <input type="submit" value=" + Add Student Details" />
</form>
<br>
        <table border="1">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Reporting Teacher</th>
        <th>Action</th>


        </tr>


        <tr>
        @foreach($student as $value)
        <td>{{ $value->id }}</td>
        <td>{{ $value->student_name }}</td>
        <td>{{ $value->age }}</td>
        <td>{{ $value->gender }}</td>
        <td>{{ $value->teacher_name }}</td>


        <td><form action="{{ route('student.destroy',$value->id) }}" method="post">
                                <a href="/student/{{$value->id}}/edit">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form></td>


        </tr>
        @endforeach

        </table>
 
</body>
</html>
