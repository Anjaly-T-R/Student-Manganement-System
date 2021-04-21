<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Add</title>
</head>
<body>
    <h2>Student Add Form</h2>
        <form action="{{ route('student.store') }}" method="post">
        @csrf
            
        <label>Student Name: </label>
            <input type="text" name="student_name" placeholder="Student Name"><br> <br> 
        <label for="age">Age: </label>
            <input type="number" name="age" placeholder="Age"><br> <br> 
        <label>
        Gender:
        </lable><br>
            <input type="radio" name="gender" value="M">Male<br>
            <input type="radio" name="gender" value="F">Female<br><br>

        <label>Reporting Teacher:</label> 
            <select name="teacher_id">
                <option>--select--</option>
                @foreach($teacher_array as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                 @endforeach
            </select><br> <br> 
        <input type="submit" value="Add Student">
        <a href="{{ route('student.index') }}">Student details</a><br>
        <a href="/">Home</a>

</body>
</html>

