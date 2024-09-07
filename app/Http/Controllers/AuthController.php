<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class AuthController extends Controller
{
    // 学号登录
    public function login(Request $request)
    {
        $studentNumber = $request->input('student_number');

        // 查找学生
        $student = Student::where('student_number', $studentNumber)->first();

        if ($student) {
            return response()->json([
                'status' => 'success',
                'student' => $student
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => '学号不存在'
            ], 404);
        }
    }
}

