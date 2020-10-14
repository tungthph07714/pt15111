@section('content')
<!-- View hien thi chi tiet sinh vien -->
<table class="table table-striped">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Active</th>
    </thead>
    <tbody>
        @php $index = 1; @endphp
        @foreach($students as $student)
        <tr>
            <th>{{$index++}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->phone_number}}</td>
            <td>
                @if($student->gender == 0)
                Trai
                @elseif($student->gender == 1)
                Gái
                @else
                Bê đuê
                @endif
            </td>
            <td>{{$student->address}}</td>
            <td>{{$student->is_active == 0 ? 'Kích hoạt' : 'Không kích hoạt'}}</td>
        </tr>
        @endforeach
    </tbody>
</table>