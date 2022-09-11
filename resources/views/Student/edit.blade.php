@extends('student.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$student->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$student->age}}" class="form-control"/></br>
        <label>Status</label></br>
        <select type="select" name="status" id="status" value="{{$student->status}}" class="form-control">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option></select></br>
        <label>Image</label></br>
        <input type="file" name="image" id="image" value="{{$student->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

    
  
  </div>
</div>
@stop