@extends('admin-layout.master')

@section('title', 'Edit student')

@section('content-header', "Edit student  $student->name")
@section('content')
    <form
        method="POST"
        action="{{route('students.update', $student->id) }}"
    >
        <!-- Them token gui len -->
        @csrf
        <!-- Thay doi phuong thuc gui request thanh PUT -->
        <input type='hidden' name='_method' value='PUT' />
        <div>
            <label for='name'>Name</label>
            <input id='name' type="text" name="name" value="{{$student->name}}" />
        </div>
        <div>
            <label for='phone'>Phone</label>
            <input id='phone' type="text" name="phone" value="{{$student->phone}}" />
        </div>
        <div>
            <label for='age'>Age</label>
            <input id='age' type="number" name="age" value="{{$student->age}}" />
        </div>
        <div>
            <label for='address'>Address</label>
            <input id='address' type="text" name="address" value="{{$student->address}}" />
        </div>
        <div>
            <label>Gender</label>
            Nu
            <input type="radio" name="gender" value="0" {{$student->gender === 0 ? "checked" : ""}} />
            Nam
            <input type="radio" name="gender" value="1" {{$student->gender === 1 ? "checked" : ""}} />
            Khong xac dinh
            <input type="radio" name="gender" value="2" {{$student->gender === 2 ? "checked" : ""}} />
        </div>
        <div>
            <label>Status</label>
            Deactive
            <input type="radio" name="is_active" value="0" {{$student->is_active === 0 ? "checked" : ""}} />
            Active
            <input type="radio" name="is_active" value="1" {{$student->is_active === 1 ? "checked" : ""}} />
        </div>
        <div>
            <button type='submit'>UPDATE</button>
        </div>
    </form>
@endsection