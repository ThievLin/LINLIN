@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        
        <br><label>firstname</label><br>
        <br><input type="text" name="firstname" id="firstname" class="form-control">

         @if ($errors->has('firstname'))
            <span class="text-danger">{{ $errors->first('firstname') }}</span><br>
         @endif

        <br><label>lastname</label><br>
        <br><input type="text" name="lastname" id="lastname" class="form-control">

          @if ($errors->has('lastname'))
            <span class="text-danger">{{ $errors->first('lastname') }}</span><br>
          @endif

        <br><label>gender</label><br>
        <br><input type="text" name="gender" id="gender" class="form-control">

          @if ($errors->has('gender'))
            <span class="text-danger">{{ $errors->first('gender') }}</span><br>
          @endif


          <br><label>age</label><br>
        <br><input type="text" name="age" id="age" class="form-control">

         @if ($errors->has('age'))
            <span class="text-danger">{{ $errors->first('age') }}</span><br>
         @endif

        <br><label>dob</label><br>
        <br><input type="text" name="dob" id="dob" class="form-control">

          @if ($errors->has('dob'))
            <span class="text-danger">{{ $errors->first('dob') }}</span><br>
          @endif


        <br><input type="submit" value="Save" class="btn btn-success"><br>
      </form>
    
  </div>
</div>
  
@stop