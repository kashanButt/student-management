@extends('template')
@section('content')
    <section class="semesterResultTable">
        <table>
            <tr class="head">
                <th>Student Id</th>
                <th>Semester Id</th>
                <th>Student Name</th>
                <th>Subject Id</th>
                <th>Teacher Id</th>
                <th>Marks Obtained</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $item)
                <tr class="data">
                    <td>{{ $item->student_id }}</td>
                    <td>{{ $item->semester_id }}</td>
                    <td>{{ $item->student_name }}</td>
                    <td>{{ $item->subject_id }}</td>
                    <td>{{ $item->teacher_id }}</td>
                    <td>{{ $item->marks_obtained }}</td>
                    <td>{{ $item->grade }}</td>
                    <td><a href="/semester-entry/update/{{ $item->s_no }}"><button class="update">Update</button></a><br>
                        <a href="/semester-entry/delete/{{ $item->s_no }}"><button class="delete">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
