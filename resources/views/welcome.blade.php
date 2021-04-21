<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
    <h1> Student Management System</h1>
    a.<div><a href="{{ route('student.create') }}">Add Students</a></div>
    b.<div><a href="{{ route('student.index') }}">Display Students List</a></div>
    c.<div><a href="{{ route('mark.create') }}">Add Students Marks</a></div>
    d.<div><a href="{{ route('mark.index') }}">Display Students Marks</a></div>
</body>
</html>