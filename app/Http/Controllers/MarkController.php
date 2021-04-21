<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Mark;
use DB;
class MarkController extends Controller
{
    /**
     * Author :Anjaly T R
     * Date   :21-04-2021
     * purpose: Display the students Marks
     */
    public function index()
    {
        
        $mark = DB::table('marks')
            ->join('students', 'marks.student_id', '=', 'students.id')
            ->select('marks.*', 'students.student_name')
            ->orderBy('marks.id', 'ASC')
            ->get();
        return view('admin.mark.mark_list',compact('mark'));

        
    }

    /**
     * Author  : Anjaly T R
     * Date    : 21-04-2021
     * Purpose : Mark adding form 
     */
    public function create()
    {
        $student = Student::all();
        return view('admin.mark.add_mark_form', compact('student'));
    }

    /**
     * Author : Anjaly T R
     * Date   : 21-04-2021 
     * Purpose: Store a newly created mark in storage.
     */
    public function store(Request $request)
    {
        $mark = new Mark;
        $mark->student_id=$request->student_id;
        $mark->term=$request->term;
        $mark->maths=$request->maths;
        $mark->science=$request->science;
        $mark->history=$request->history;
        $maths=$request->maths;
        $science=$request->science;
        $history=$request->history;
        $total=$maths+$science+$history;
        $mark->total_marks=$total;
        
        $mark->save();
        return redirect()->route('mark.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Author : Anjaly T R
     * Date   : 21-04-2021 
     * Purpose: Remove the Mark from storage..
     */
    public function destroy($id)
    {
        $data = Mark::find($id);
        $data->delete();
        return redirect()->route('mark.index');
    }
}
