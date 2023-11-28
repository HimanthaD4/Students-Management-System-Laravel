<?php

namespace domain\Services;

use App\Models\Students;

class StudentService
{
    protected $student;

    public function __construct(){
        $this->student = new Students();
    }

    public function get($student_id){
        return $this->student->find($student_id);
    }

    public function all(){
       return $this->student->all();
    }


    public function store($data){
        $this->student->create($data);
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

    public function update(array $data, $student_id){
        $student =  $this->student->find($student_id);
        $student -> update($this->edit($student, $data));

    }

    protected function edit(Students $student,$data){
        return array_merge($student->toArray(),$data);
    }

}
