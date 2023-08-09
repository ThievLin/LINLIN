@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>

  <div class="card-body">
       
    <form action="{{ url('student/' .$students->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")

      <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />

      <br><label>Name</label>

      <br><input type="text" name="firstname" id="firstname" value="{{$students->firstname}}" class="form-control">
              @if ($errors->has('firstname'))
                <span class="text-danger">{{ $errors->first('firstname') }}</span><br>
              @endif

      <br><label>lastname</label><br>
      <br><input type="text" name="lastname" id="lastname" value="{{$students->lastname}}" class="form-control">
    
              @if ($errors->has('lastname'))
                  <span class="text-danger">{{ $errors->first('lastname') }}</span><br>
              @endif

      <br><label>gender</label><br>
      <br><input type="text" name="gender" id="gender" value="{{$students->gender}}" class="form-control">

              @if ($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span><br>
              @endif

      <br><label>age</label><br>
      <br><input type="text" name="age" id="age" value="{{$students->age}}" class="form-control">

              @if ($errors->has('age'))
                <span class="text-danger">{{ $errors->first('age') }}</span><br>
              @endif

      <br><label>dob</label><br>
      <br><input type="text" name="dob" id="dob" value="{{$students->dob}}" class="form-control">

              @if ($errors->has('dob'))
                <span class="text-danger">{{ $errors->first('dob') }}</span><br>
              @endif

      <br><input type="submit" value="Save" class="btn btn-success"><br>
      
      </form>
  </form>
</div>

</div>
  
@stop