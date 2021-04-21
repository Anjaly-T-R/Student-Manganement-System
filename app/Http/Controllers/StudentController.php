<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use DB;

class StudentController extends Controller
{
    /**
     * Author  : Anjaly T R
     * Date    : 21-04-2021
     * Purpose : Display a listing of the Student deatails.
     */
    public function index()
    {
        $student = DB::table('students')
            ->join('teachers', 'students.teacher_id', '=', 'teachers.id')
            ->select('students.*', 'teachers.teacher_name')
            ->orderBy('students.id', 'ASC')
            ->get();
  
        return view('admin.student_list',compact('student'));
    }

    /**
     * Author  : Anjaly T R
     * Date    : 21-04-2021
     * Purpose : Show the form for creating a new student. 
     */
    public function create()
    {
        
        $teacher_array = Teacher::all();
        return view('admin.add_student',compact('teacher_array'));
    }

    /**
     * Author  : Anjaly T R
     * Date    : 21-04-2021
     * Purpose : Store a newly created Student Details in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->student_name=$request->student_name;
        $student->age=$request->age;
        $student->gender=$request->gender;
        $student->teacher_id=$request->teacher_id;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Author : Anjaly T R
     * Date: 21-04-2021
     * Purpose: Show the form for editing the student details.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $teacher = Teacher::all();
       return view('admin.edit_student',compact('student','teacher'));
    }

    /**
     * Author : Anjaly T R
     * Date :21-04-2021
     * Purpose : Update the student details in storage.
     *
     
     */
    public function update(Request $request, $id)
    {
        $data = Student::find($id);
      
        $data->student_name=$request->student_name;
        $data->age=$request->age;
        $data->gender=$request->gender;
        $data->teacher_id=$request->teacher_id;
        $data->save();
        return redirect()->route('student.index');
    }

    /**
     * Author : Anjaly T R
     * Date :21-04-2021
     * Purpose : Remove the student from storage.
     */
    public function destroy($id)
    {
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('student.index');
    }
}
