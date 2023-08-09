@extends('backgrounds.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>

  <div class="card-body">
       
    <form action="{{ url('background/' .$backgrounds->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")

      <input type="hidden" name="id" id="id" value="{{$backgrounds->id}}" id="id" />

        <br><label>highschool</label><br>
        <br><input type="text" name="highschool" id="highschool" value="{{$backgrounds->highschool}}" class="form-control">

              @if ($errors->has('highschool'))
                <span class="text-danger">{{ $errors->first('highschool') }}</span><br>
              @endif

        <br><label>graduate</label><br>
        <br><input type="text" name="graduate" id="graduate" value="{{$backgrounds->graduate}}" class="form-control">

              @if ($errors->has('graduate'))
                <span class="text-danger">{{ $errors->first('graduate') }}</span><br>
              @endif

        <br><input type="submit" value="Save" class="btn btn-success"><br>
         
      </form>

</div>

</div>
@stop