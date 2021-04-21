<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit student</title>
</head>
<body>
<form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
                        
                        
                        
<div>
        <label for="student_name">Student Name: </label>
        <input type="text" name="student_name" value="{{ $student['student_name'] }}">
</div>
<div>
        <label for="age">Age: </label>
        <input type="number" name="age" value="{{ $student['age'] }}">
</div>
<div>
<label for="gender">Gender: </label>
<input type=radio name="gender" value="M" {{ $student->gender == 'M' ? 'checked' : ''}}>Male</option>
<input type=radio name="gender" value="F" {{ $student->gender == 'F' ? 'checked' : ''}}>Female</option>
    

</div>
<div>
        <label for="teacher_name">Reporting Teacher:</label>

        <select name="teacher_id">
        <option>--select--</option>
        @foreach($teacher as $teach)

        <option value="{{ $teach->id }}" @if($teach->id==$student['teacher_id']) selected='selected' @endif >{{ $teach->teacher_name}}</option>
        @endforeach
        </select>
</div></br>







<div>
        <button type="submit">Update</button>
</div>
</body>
</html>