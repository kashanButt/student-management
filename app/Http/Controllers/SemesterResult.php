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
        $semester_name = $request->student_semester_name;
        $subject_id = $request->student_subject_id;
        $subject_name = $request->student_subject_name;
        $teacher_id = $request->student_teacher_id;
        $teacher_name = $request->student_teacher_name;
        $marks_obtained = $request->student_marks_obtained;
        $grade = $request->student_grade;

        DB::insert('INSERT INTO `semester_result`(`semester_id`, `student_id`, `student_name`, `subject_id`, `subject_name`, `teacher_id`, `teacher_name`, `marks_obtained`, `grade`) VALUES (?,?,?,?,?,?,?,?,?)', [$semester_id, $student_id, $student_name, $subject_id, $subject_name, $teacher_id, $teacher_name, $marks_obtained, $grade]);

        return redirect('/student-semester-entry');

    }
    public function get()
    {
        $data = DB::select('SELECT * FROM `semester_result` ORDER BY s_no DESC');
        return view('semester-result-table', ['data' => $data, 'title' => 'Student Semester Result']);
    }
    public function single($s_no) {
        $data = DB::select('SELECT * FROM `semester_result` WHERE s_no = ?', [$s_no]);
        return view('update-semester-entry',['data' => $data, 'title' => 'Update Student Entry' ]);
    }
    public function update(Request $request, int $id) {
        
        $sno = $id;
        $student_id = $request->student_id;
        $student_name = $request->student_name;
        $semester_id = $request->student_semester_id;
        $semester_name = $request->student_semester_name;
        $subject_id = $request->student_subject_id;
        $subject_name = $request->student_subject_name;
        $teacher_id = $request->student_teacher_id;
        $teacher_name = $request->student_teacher_name;
        $marks_obtained = $request->student_marks_obtained;
        $grade = $request->student_grade;
        
        DB::update('UPDATE `semester_result` SET `semester_id`=?,`semester_name`=?,`student_id`=?,`student_name`=?,`subject_id`=?,`subject_name`=?,`teacher_id`=?,`teacher_name`=?,`marks_obtained`=?,`grade`=? WHERE s_no = ?', [$semester_id, $semester_name, $student_id, $student_name, $subject_id, $subject_name, $teacher_id,$teacher_name, $marks_obtained, $grade, $id]);

        return redirect('/student-semester-result');
    }
    public function delete($id) {
        DB::delete('DELETE FROM `semester_result` WHERE s_no = ?', [$id]);
        return redirect('/student-semester-result');
    }
}