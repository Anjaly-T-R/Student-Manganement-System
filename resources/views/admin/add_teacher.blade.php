<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Add</title>
</head>
<body>
<h4>Teacher Add</h4> 
<form action="{{ route('teacher.store') }}" method="post">
@csrf
<div>
<label for="teacher_name">Teacher Name</label>
<input type="text" name="teacher_name" placeholder="Teacher Name">
<span class="text-danger">@error('teacher_name'){{ $message }}@enderror</span>
<button type="submit">ADD</button>
</div>  



</body>
</html>
