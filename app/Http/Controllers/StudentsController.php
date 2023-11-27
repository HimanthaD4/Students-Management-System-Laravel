<?php

namespace App\Http\Controllers;

use App\Models\Students;
use domain\Facades\Studentsfacade;
use Illuminate\Http\Request;


class StudentsController extends ParentController
{
    // protected $student;

    // public function __construct(){
    //     $this->student = new Students();

    // }

    public function index(){
        $response['students'] = StudentsFacade::all();
        return view('pages.students.index')->with($response);
    }


    public function store(Request $request){
       StudentsFacade::store($request->all());
        return redirect()->back();
        // return redirect()->route('home');
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
