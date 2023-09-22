@extends('template')
@section('content')
    <section class="form">
        Update Semester Entry
        <form action="/update-semester-entry/{{$data[0]->s_no}}" method="post">
            @csrf
            <input type="text" name="student_id" class="student_id" placeholder="Student Id" value="{{$data[0]->student_id}}">
            <input type="text" name="student_name" class="student_name" placeholder="Student Name" value="{{$data[0]->student_name}}">
            <input type="text" name="student_semester_id" class="student_semester_id" placeholder="Semester id" value="{{$data[0]->semester_id}}">
            <input type="text" name="student_subject_id" class="student_subject_id" placeholder="Subject id" value="{{$data[0]->subject_id}}">
            <input type="text" name="student_subject_name" class="student_subject_name" placeholder="Subject name" value="{{$data[0]->subject_name}}">
            <input type="text" name="student_teacher_id" class="student_teacher_id" placeholder="Teacher id" value="{{$data[0]->teacher_id}}">
            <input type="text" name="student_teacher_name" class="student_teacher_name" placeholder="Teacher name" value="{{$data[0]->teacher_name}}">
            <input type="text" name="student_marks_obtained" class="student_marks_obtained" placeholder="Marks Obtained" value="{{$data[0]->marks_obtained}}">
            <input type="text" name="student_grade" class="student_grade" placeholder="Grade" value="{{$data[0]->grade}}">
            <button>Update</button>
        </form>
    </section>
@endsection
