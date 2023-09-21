<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SemesterResult extends Controller
{
    public function post(Request $request)
    {
        $student_id = $request->student_id;
        $student_name = $request->student_name;
        $semester_id = $request->student_semester_id;
        $subject_id = $request->student_subject_id;
        $teacher_id = $request->student_teacher_id;
        $marks_obtained = $request->student_marks_obtained;
        $grade = $request->student_grade;

        DB::insert('INSERT INTO `semester_result`(`semester_id`, `student_id`, `student_name`, `subject_id`, `teacher_id`, `marks_obtained`, `grade`) VALUES (?,?,?,?,?,?,?)', [$semester_id, $student_id, $student_name, $subject_id, $teacher_id, $marks_obtained, $grade]);

        return redirect('/student-semester-entry');

    }
    public function get()
    {
        $data = DB::select('SELECT * FROM `semester_result`');
        return view('semester-result-table', ['data' => $data, 'title' => 'Student Semester Result']);
    }
}