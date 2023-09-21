@extends('template')
@section('content')
    <section class="form">
        Semester Entry Form
        <form action="/semester-entry/post" method="post">
            @csrf
            <input type="text" name="student_id" class="student_id" placeholder="Student Id">
            <input type="text" name="student_name" class="student_name" placeholder="Student Name">
            <input type="text" name="student_semester_id" class="student_semester_id" placeholder="Semester id">
            <input type="text" name="student_subject_id" class="student_subject_id" placeholder="Subject id">
            <input type="text" name="student_teacher_id" class="student_teacher_id" placeholder="Teacher id">
            <input type="text" name="student_marks_obtained" class="student_marks_obtained" placeholder="Marks Obtained">
            <input type="text" name="student_grade" class="student_grade" placeholder="Grade">
            <button>Post</button>
        </form>
    </section>
@endsection
