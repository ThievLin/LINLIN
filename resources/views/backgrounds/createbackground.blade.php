@extends('backgrounds.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Background</div>
  <div class="card-body">
       
      <form action="{{ url('background') }}" method="post">
        {!! csrf_field() !!}
        
        <label for="category">name</label> 
        <a  href="#" data-toggle="tooltip" data-html="true" data-original-title="<em> Add New </em>"><i class="cil-plus"></i></a>
        <br>
          <select class="form-control" name="student_id">
              @foreach($students as $value)
                <option value="{{$value->id}}">{{$value->lastname}}</option>                                       
              @endforeach
          </select>

          @if ($errors->has('student_id'))
            <span class="text-danger">{{ $errors->first('student_id') }}</span><br>
          @endif
          
        <br><label>highschool</label><br>
        <br><input type="text" name="highschool" id="highschool" class="form-control">

         @if ($errors->has('highschool'))
            <span class="text-danger">{{ $errors->first('highschool') }}</span><br>
         @endif

        <br><label>graduate</label><br>
        <br><input type="text" name="graduate" id="graduate" class="form-control">

          @if ($errors->has('graduate'))
            <span class="text-danger">{{ $errors->first('graduate') }}</span><br>
          @endif

        <br><input type="submit" value="Save" class="btn btn-success"><br>
      </form>
    
  </div>
</div>
  
@stop