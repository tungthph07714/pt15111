@extends('admin-layout.master')
@section('title','Sua')
@section('content-header','Sua Thong Tin $student->name')

@section('content')
<form action="{{route('students.update',$student->id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$tstudent->name}}">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="{{$student->phone}}">
    </div>
    <div>
        <label for="radio">Gender</label>
        <input type="radio" name="gender" id="radio" value="0" {{$student->gender === 0 ? "checked" : ""}}>Nu
        <input type="radio" name="gender" id="radio" value="1" {{$student->gender === 1 ? "checked" : ""}}>Nam
        <input type="radio" name="gender" id="radio" value="2" {{$student->gender === 2 ? "checked" : ""}}>Khac
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name="age" id="age" value="{{$student->age}}">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{$student->address}}">
    </div>
    <div>
        <label>Status</label>
        <input type="radio" name="is_active" id="is_active" value="0" {{$student->is_active === 0 ? "checked" : ""}}> Khong kich hoat
        <input type="radio" name="is_active" id="is_active" value="1" {{$student->is_active === 1 ? "checked" : ""}}> Kich hoat
    </div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
<div class="col-4">
    <form action="{{route('students.update',$student->id)}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$student->name}}">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{$student->phone}}">
        </div>
        <div class="form-group">
            <label for="radio">Gender</label>
            <input type="radio" name="gender" id="radio" value="0" {{$student->gender === 0 ? "checked" : ""}}>Nu
            <input type="radio" name="gender" id="radio" value="1" {{$student->gender === 1 ? "checked" : ""}}>Nam
            <input type="radio" name="gender" id="radio" value="2" {{$student->gender === 2 ? "checked" : ""}}>Khac
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" name="age" id="age" value="{{$student->age}}">
        </div>
        <div class="form-group">
            <label for="address">address</label>
            <input type="text" class="form-control" name="address" id="address" value="{{$student->address}}">
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="radio" name="is_active" id="is_active" value="0" {{$student->is_active === 0 ? "checked" : ""}}> Khong kich hoat
            <input type="radio" name="is_active" id="is_active" value="1" {{$student->is_active === 1 ? "checked" : ""}}> Kich hoat
        </div>
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="{{route('students.index')}}"><button class="btn btn-secondary">Cancel</button></a>
    </form>
</div>
@endsection 
