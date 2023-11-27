<?php

namespace domain\Services;

use App\Models\Students;



class StudentService
{
    protected $student;

    public function __construct(){
        $this->student = new Students();

    }

    public function all(){
       return $this->student->all();

    }


    public function store($data){
        $this->student->create($data);

        // return redirect()->route('home');
    }


    public function delete($student_id){
        $student = $this->student->find($student_id);
        $student->delete();

    }

    public function active($student_id){
        $student = $this->student->find($student_id);
        $student->status = 1;
        $student->update();

    }
}
