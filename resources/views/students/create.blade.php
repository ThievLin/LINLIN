@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Create New Students</h3></div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        
        <br><label>First Name</label><br>
        <br><input type="text" name="firstname" id="firstname" class="form-control">

         @if ($errors->has('firstname'))
            <span class="text-danger">{{ $errors->first('firstname') }}</span><br>
         @endif

        <br><label>Last Name</label><br>
        <br><input type="text" name="lastname" id="lastname" class="form-control">

          @if ($errors->has('lastname'))
            <span class="text-danger">{{ $errors->first('lastname') }}</span><br>
          @endif

        <br><label>Gender</label><br>
        <br><input type="text" name="gender" id="gender" class="form-control">

          @if ($errors->has('gender'))
            <span class="text-danger">{{ $errors->first('gender') }}</span><br>
          @endif


          <br><label>Age</label><br>
        <br><input type="text" name="age" id="age" class="form-control">

         @if ($errors->has('age'))
            <span class="text-danger">{{ $errors->first('age') }}</span><br>
         @endif

        <br><label>Date of Birst</label><br>
        <br><input type="text" name="dob" id="dob" class="form-control">

          @if ($errors->has('dob'))
            <span class="text-danger">{{ $errors->first('dob') }}</span><br>
          @endif

          <br><label>Image</label><br>
          <br><input type="file" name="image" id="image" class="form-control">
        
          <br>
          <br>

          <label for="category">Subject</label> 
          <br>
        <a  href="#" data-toggle="tooltip" data-html="true" data-original-title="<em> Add New </em>"><i class="cil-plus"></i></a>
        <br>
          <select class="form-control" name="subject_id">
              @foreach($subjects as $value)
                <option value="{{$value->id}}">{{$value->Skill}}</option>                                       
              @endforeach
          </select>

        <br><input type="submit" value="Save" class="btn btn-success"><br>
      </form> 
  </div>
</div>  
@stop