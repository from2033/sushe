<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    // 添加学生
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student, 201);
    }

    // 获取学生信息
    public function show($studentId)
    {
        $student = Student::findOrFail($studentId);
        return response()->json($student);
    }
}

