<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Author : Anjaly T R
     * 21-04-2021
     * Purpose :SHOW THE FORM FOR ADDING TEACHERS NAME
     */
    public function create()
    {
        return view('admin/add_teacher');
    }

    /**
     * Author : Anjaly T R
     * Date :21-04-2021
     * Purpose :Store a newly created teacher in storage.
     */
    public function store(Request $req)
    {
                //validation
                $req->validate([
                    'teacher_name'=>'required',
                ]);
                $teacher= new Teacher;
                $teacher->teacher_name=$req->teacher_name;
                $query=$teacher->save();
        
                return redirect()->route('teacher.create');
                
            
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
