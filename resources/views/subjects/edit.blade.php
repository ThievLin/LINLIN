@extends('subjects.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Edit Subject</h3></div>
  <div class="card-body">
       
    <form action="{{ url('subject/' .$subjects->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")

      <input type="hidden" name="id" id="id" value="{{$subjects->id}}" id="id" />
        
        <br><label>Subject</label><br>
        <br><input type="text" name="Skill" id="Skill" value="{{$subjects->Skill}}" class="form-control">

         @if ($errors->has('Skill'))
            <span class="text-danger">{{ $errors->first('Skill') }}</span><br>
         @endif

        <br><label>Time to study</label><br>
        <br><input type="text" name="time" id="time" value="{{$subjects->time}}" class="form-control">

          @if ($errors->has('time'))
            <span class="text-danger">{{ $errors->first('time') }}</span><br>
          @endif

        <br><label>Teacher Name</label><br>
        <br><input type="text" name="teacher" id="teacher" value="{{$subjects->teacher}}" class="form-control">

          @if ($errors->has('teacher'))
            <span class="text-danger">{{ $errors->first('teacher') }}</span><br>
          @endif


        <br><input type="submit" value="Save" class="btn btn-success"><br>
      </form>
    
  </div>
</div>
  
@stop