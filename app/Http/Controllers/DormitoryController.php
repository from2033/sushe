<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dormitory;
use App\Models\Student;
class DormitoryController extends Controller
{
    // 获取所有宿舍
    public function index()
    {
        $dormitories = Dormitory::all();
        return response()->json($dormitories);
    }

    // 学生加入宿舍
    public function join(Request $request, $dormitoryId)
    {
        $studentNumber = $request->input('student_number'); // 获取学生学号
        $dormitory = Dormitory::findOrFail($dormitoryId);  // 找到目标宿舍

        // 检查宿舍是否已满
        if ($dormitory->current_count >= $dormitory->capacity) {
            return response()->json(['message' => '宿舍已满'], 204);
        }

        // 查找学生
        $student = Student::where('student_number', $studentNumber)->firstOrFail();  // 根据学号查找学生

        // 查找学生是否已加入某个宿舍
        $currentDormitory = $student->dormitories()->first();

        if ($currentDormitory) {
            // 如果学生已在宿舍中，从当前宿舍退出
            $currentDormitory->students()->detach($student->id);  // 从当前宿舍中移除学生
            $currentDormitory->decrement('current_count');  // 更新当前宿舍的入住人数
        }

        // 加入新的宿舍
        $dormitory->students()->attach($student->id);  // 将学生加入新的宿舍
        $dormitory->increment('current_count');  // 更新新宿舍的入住人数

        return response()->json(['message' => '加入成功']);
    }





    // 获取宿舍中的学生
    // 获取某个宿舍中的学生列表
    public function getStudents($dormitoryId)
    {
        $dormitory = Dormitory::with('students')->findOrFail($dormitoryId);
        return response()->json([
            'dormitory' => $dormitory,
            'students' => $dormitory->students
        ]);
    }
}

