@extends('template');
@section('content')
    <section class="semesterResultTable">
        <table>
            <tr>
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
                <tr>
                    <td>{{ $data[0]->semester_id }}</td>
                    <td>{{ $data[0]->student_id }}</td>
                    <td>{{ $data[0]->student_name }}</td>
                    <td>{{ $data[0]->subject_id }}</td>
                    <td>{{ $data[0]->teacher_id }}</td>
                    <td>{{ $data[0]->marks_obtained }}</td>
                    <td>{{ $data[0]->grade }}</td>
                    <td><a href="/semester-entry/update"><button>Update</button></a>
                        <a href="/semester-entry/delete/{{ $data[0]->student_id }}"><button>Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
