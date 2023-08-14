@extends('backgrounds.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Create New Background</h3></div>
  <div class="card-body">
       
      <form action="{{ url('background') }}" method="post">
        {!! csrf_field() !!}
        
        <label for="category">Name of student</label> 
        <a  href="#" data-toggle="tooltip" data-html="true" data-original-title="<em> Add New </em>"><i class="cil-plus"></i></a>
        <br>
          <select class="form-control" name="student_id">
              @foreach($students as $value)
                <option value="{{$value->id}}">{{$value->firstname}} {{$value->lastname}}</option>                                       
              @endforeach
          </select>

          @if ($errors->has('student_id'))
            <span class="text-danger">{{ $errors->first('student_id') }}</span><br>
          @endif
          
        <br><label>Highschool</label><br>
        <br><input type="text" name="highschool" id="highschool" class="form-control">

         @if ($errors->has('Highschool'))
            <span class="text-danger">{{ $errors->first('highschool') }}</span><br>
         @endif

        <br><label>Year graduate</label><br>
        <br><input type="text" name="graduate" id="graduate" class="form-control">

          @if ($errors->has('graduate'))
            <span class="text-danger">{{ $errors->first('graduate') }}</span><br>
          @endif

        <br><input type="submit" value="Save" class="btn btn-success"><br>
      </form>
    
  </div>
</div>
  
@stop