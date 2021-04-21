<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mark</title>
</head>
<body>
    <h2>Student Mark Adding Form</h2>
        <form action="{{ route('mark.store') }}" method="POST">
        @csrf
            <label>Student Name:</label>
                <select name="student_id">
                    <option>--select--</option>
                    @foreach($student as $stud)
                    <option value="{{ $stud->id }}">{{ $stud->student_name }}</option>
                    @endforeach
                 </select><br><br>

            <label for="term">Term:</label>
                <select name="term" id="term">
                    <option>--select--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                </select><br><br>

            <label>Subject:</label><br>
                Maths: <input type="number" name="maths"><br><br>
                Science:<input type="number" name="science"><br><br>
                History:<input type="number" name="history"><br><br>
        <input type="submit" value="Add Mark">
        <a href="{{ route('mark.index') }}">Display Mark</a><br>
        <a href="/">Home</a>
    

    


</body>
</html>