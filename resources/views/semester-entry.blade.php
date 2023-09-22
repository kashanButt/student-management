@extends('template')
@section('content')
    <section class="form">
        <h2>Semester Entry Form</h2>
        <form action="/semester-entry/post" method="post">
            @csrf
            <label for="student_id">Student Id:</label><input type="text" name="student_id" class="student_id">
            <label for="student_name">Student Name:</label><input type="text" name="student_name" class="student_name">
            <label for="student_semester_id">Semester Id:</label><input type="text" name="student_semester_id" class="student_semester_id">
            <label for="student_semester_name">Semester Name:</label><input type="text" name="student_semester_name" class="student_semester_name">
            <label for="student_subject_id">Subject Id:</label><input type="text" name="student_subject_id" class="student_subject_id">
            <label for="student_subject_name">Subject Name:</label><input type="text" name="student_subject_name" class="student_subject_name">
            <label for="student_teacher_id">Teacher Id:</label><input type="text" name="student_teacher_id" class="student_teacher_id">
            <label for="student_teacher_name">Teacher Name:</label><input type="text" name="student_teacher_name" class="student_teacher_name">
            <label for="student_marks_obtained">Marks Obtained:</label><input type="text" name="student_marks_obtained" class="student_marks_obtained">
            <label for="student_grade">Grade:</label><input type="text" name="student_grade" class="student_grade">
            <button>Post</button>
        </form>
    </section>
@endsection
