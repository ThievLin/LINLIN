@extends('subjects.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Create New subjects</h3></div>
  <div class="card-body">
       
      <form action="{{ url('subject') }}" method="post">
        {!! csrf_field() !!}
        
        <br><label>Subject</label><br>
        <br><input type="text" name="Skill" id="Skill" class="form-control">

         @if ($errors->has('Skill'))
            <span class="text-danger">{{ $errors->first('Skill') }}</span><br>
         @endif

        <br><label>Time to study</label><br>
        <br><input type="text" name="time" id="time" class="form-control">

          @if ($errors->has('time'))
            <span class="text-danger">{{ $errors->first('time') }}</span><br>
          @endif

        <br><label>Teacher name</label><br>
        <br><input type="text" name="teacher" id="teacher" class="form-control">

          @if ($errors->has('teacher'))
            <span class="text-danger">{{ $errors->first('teacher') }}</span><br>
          @endif

        <br><input type="submit" value="Save" class="btn btn-success"><br>
      </form>
    
  </div>
</div>
  
@stop