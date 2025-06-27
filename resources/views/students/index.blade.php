@extends('layouts.app')
@section('content')

<h2 class="mb-3">Student List</h2>


   
 <form method="GET" action="{{route("students.create")}}" class="row g-3 mb-4">
        <div class="col-auto">
            <input type="text" name="search" class="form-control" placeholder="Search by name, email, or course" value="">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="" class="btn btn-secondary">Reset</a>
        </div>
    </form>


<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-header">
            <tr><th class="">ID</th><th>Name</th><th>Email</th><th>Course</th><th>Actions</th></tr>
        </thead>

        <tbody>
            @foreach($student as $studentitem)
           <tr>
             <td>{{$studentitem->id}}</td>
            <td>{{$studentitem->name}}</td>
             <td>{{$studentitem->email}}</td>
              <td>{{$studentitem->course}}</td>
              <td>
                <a href="{{url('student/'.$studentitem->id.'/edit')}}" class="btn btn-info btn-sm">Edit</a>
                 <a href="{{url('student/'.$studentitem->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
              </td>
           </tr>

            
              @endforeach
        </tbody>
            </table>
           

        
        </div>
    </div>
</div>


    
@endsection