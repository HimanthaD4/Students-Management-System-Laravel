<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    protected $student;

    public function __construct(){
        $this->student = new Students();

    }

    public function index(){
        $response['students'] = $this->student->all();
        return view('pages.students.index')->with($response);
    }


    public function store(Request $request){
        $this->student->create($request->all());
        return redirect()->back();
        // return redirect()->route('home');
    }


    public function delete($student_id){
        $student = $this->student->find($student_id);
        $student->delete();
        return redirect()->back();
    }

    public function active($student_id){
        $student = $this->student->find($student_id);
        $student->status = 1;
        $student->update();
        return redirect()->back();
    }


}
