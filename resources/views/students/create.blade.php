@extends('layouts.app')

@section('content')
    <h2>Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{old("name")}}">
            @error('name') <span class="text-danger text-sm">{{$message}}</span>@enderror
        </div>
        <div class="mb-2">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{old("email")}}">
            @error('email') <span class="text-danger text-sm">{{$message}}</span>@enderror
        </div>
        <div class="mb-2">
            <label>Course</label>
            <input type="text" name="course" class="form-control"  value="{{old("course")}}">
           @error('course') <span class="text-danger text-sm">{{$message}}</span>@enderror
        </div>
        <button class="btn btn-success">Save</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection