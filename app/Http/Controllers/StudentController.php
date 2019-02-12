<?php

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;


class StudentController extends Controller {

    public function index () {
        $students = Student::paginate(5);
        return view('Student/index', [
            'students' => $students
        ]);
    }

    // from表单不写提交方法名时的默认提交方法
    public function detail (Request $request) {
        if ($request->isMethod('POST')) {
            if (Student::create($request->input('student'))) {
                return redirect('student/index');
            } else {
                return redirect()->back();
            }
        }
        return view('student/detail');
    }

    // 指定提交方法
    public function save (Request $request) {
        $data = $request->input('student');
        $student = new Student();
        $student->name = $data['name'];
        $student->age  = $data['age'];
        $student->sex  = $data['sex'];
        if ($student->save()) {
            return redirect('student/index');
        } else {
            return redirect()->back();
        }
    }
}