@extends('template')
@section('content')
    <section class="semesterResultTable" CELLSPACING=0 cellpadding=0 border=0>
        <table>
            <tr class="head">
                <th>Semester Id</th>
                <th>Student Id</th>
                <th>Student Name</th>
                <th>Subject Id</th>
                <th>Teacher Id</th>
                <th>Marks Obtained</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $item)
                <tr class="data">
                    <td>{{ $data[0]->semester_id }}</td>
                    <td>{{ $data[0]->student_id }}</td>
                    <td>{{ $data[0]->student_name }}</td>
                    <td>{{ $data[0]->subject_id }}</td>
                    <td>{{ $data[0]->teacher_id }}</td>
                    <td>{{ $data[0]->marks_obtained }}</td>
                    <td>{{ $data[0]->grade }}</td>
                    <td><a href="/semester-entry/update/{{ $data[0]->student_id }}"><button class="update">Update</button></a><br>
                        <a href="/semester-entry/delete/{{ $data[0]->student_id }}"><button class="delete">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
