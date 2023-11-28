<?php

namespace App\Http\Controllers;

use App\Models\Students;
use domain\Facades\Studentsfacade;
use Illuminate\Http\Request;


class StudentsController extends ParentController
{

    public function index(){
        $response['students'] = StudentsFacade::all();
        return view('pages.students.index')->with($response);
    }


    public function store(Request $request){
        $data = $request->all();

        if ($request->hasFile('Image')) {
            $imagePath = $request->file('Image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        StudentsFacade::store($data);

        return redirect()->back();
    }




    public function edit(Request $request){
        $response['student'] = StudentsFacade::get($request['student_id']);
        return view('pages.students.edit')->with($response);
    }


    public function update(Request $request,$student_id){
        StudentsFacade::update($request->all(),$student_id);
        return redirect()->back();
    }




    public function delete($student_id){
        StudentsFacade::delete($student_id);
        return redirect()->back();
    }

    public function active($student_id){
        StudentsFacade::active($student_id);
        return redirect()->back();
    }

}
