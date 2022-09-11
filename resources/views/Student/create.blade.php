   @extends('student.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <label>Status</label></br>
        <select type="select" name="status" id="status" class="form-control"></br>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option></select>
        <label>Image</label></br>
        <input class="form-control" type="file" name="image" id="image" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop