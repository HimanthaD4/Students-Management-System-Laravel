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

    public function index()
    {
        return view('pages.students.index');
    }


    public function store(Request $request)
    {
        $this->student->create($request->all());
    }
}
