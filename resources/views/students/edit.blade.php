@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Edit Student</h3></div>

  <div class="card-body">
       
    <form action="{{ url('student/' .$students->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")

      <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />

      <br><label>First Name</label>

      <br><input type="text" name="firstname" id="firstname" value="{{$students->firstname}}" class="form-control">
              @if ($errors->has('firstname'))
                <span class="text-danger">{{ $errors->first('firstname') }}</span><br>
              @endif

      <br><label>last Name</label><br>
      <br><input type="text" name="lastname" id="lastname" value="{{$students->lastname}}" class="form-control">
    
              @if ($errors->has('lastname'))
                  <span class="text-danger">{{ $errors->first('lastname') }}</span><br>
              @endif

      <br><label>Gender</label><br>
      <br><input type="text" name="gender" id="gender" value="{{$students->gender}}" class="form-control">

              @if ($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span><br>
              @endif

      <br><label>Age</label><br>
      <br><input type="text" name="age" id="age" value="{{$students->age}}" class="form-control">

              @if ($errors->has('age'))
                <span class="text-danger">{{ $errors->first('age') }}</span><br>
              @endif

      <br><label>Date of Birst</label><br>
      <br><input type="text" name="dob" id="dob" value="{{$students->dob}}" class="form-control">

              @if ($errors->has('dob'))
                <span class="text-danger">{{ $errors->first('dob') }}</span><br>
              @endif

        <br><label>Image</label><br>
        <br><input type="file" name="image" id="image" value="{{asset('/storage/images/students/'.$students->image)}}" class="form-control">

      <br>
      <br><input type="submit" value="Save" class="btn btn-success"><br>
      
      </form>
  </form>
</div>

</div>
  
@stop