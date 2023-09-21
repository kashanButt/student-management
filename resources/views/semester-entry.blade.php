@extends('template')
@section('content')
    <section class="form">
        <h2>Semester Entry Form</h2>
        <form action="/semester-entry/post" method="post">
            @csrf
            <input type="text" name="student_id" class="student_id" placeholder="Student Id">
            <input type="text" name="student_name" class="student_name" placeholder="Student Name">
            <input type="text" name="student_semester_id" class="student_semester_id" placeholder="Semester id">
            <input type="text" name="student_semester_name" class="student_semester_name" placeholder="Semester name">
            <input type="text" name="student_subject_id" class="student_subject_id" placeholder="Subject id">
            <input type="text" name="student_subject_name" class="student_subject_name" placeholder="Subject name">
            <input type="text" name="student_teacher_id" class="student_teacher_id" placeholder="Teacher id">
            <input type="text" name="student_teacher_name" class="student_teacher_name" placeholder="Teacher name">
            <input type="text" name="student_marks_obtained" class="student_marks_obtained" placeholder="Marks Obtained">
            <input type="text" name="student_grade" class="student_grade" placeholder="Grade">
            <button>Post</button>
        </form>
    </section>
@endsection
