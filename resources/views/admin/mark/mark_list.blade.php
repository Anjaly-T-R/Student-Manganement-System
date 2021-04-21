<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark List</title>
</head>
<body>
    <h2> Display Students Marks </h2>
    <form action="{{ route('mark.create') }}">
        <input type="submit" value=" + Add Student Marks" />
    </form><br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Maths</th>
                <th>Science</th>
                <th>History</th>
                <th>Term</th>
                <th>Total Marks</th>
                <th>Created On</th>
                <th>Action</th>
            </tr>
            <tr>
                @foreach($mark as $value)
                <td>{{ $value->id }}</td>
                <td>{{ $value->student_name }}</td>
                <td>{{ $value->maths }}</td>
                <td>{{ $value->science }}</td>
                <td>{{ $value->history }}</td>
                <td>@if($value->term== 1) One @elseif($value->term== 2) Two @endif </td>
                <td>{{ $value->total_marks }}</td>
                <td>{{ $value->created_at }}</td>
                <td>
                    <form action="{{ route('mark.destroy',$value->id) }}" method="post">
                        <a href="">Edit</a>
                            @csrf
                            @method('DELETE')
                                <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
                @endforeach

        </table>
 
</body>
</html>