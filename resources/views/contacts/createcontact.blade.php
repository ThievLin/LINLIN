@extends('contacts.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Create New contact</h3></div>
  <div class="card-body">
       
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
       

        <label for="category">Name Of student</label> 
        <a  href="#" data-toggle="tooltip" data-html="true" data-original-title="<em> Add New </em>"><i class="cil-plus"></i></a>
        <br>
        <br>
          <select class="form-control" name="stu_id">
              @foreach($students as $value)
                <option value="{{$value->id}}">{{$value->firstname}} {{$value->lastname}}</option>                                     
              @endforeach
          </select>

        <br><label>Address</label><br>
        <br><input type="text" name="address" id="address" class="form-control">

              @if ($errors->has('address'))
                  <span class="text-danger">{{ $errors->first('address') }}</span><br>
              @endif

        <br><label>Email</label><br>
        <br><input type="text" name="email" id="email" class="form-control">

              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span><br>
              @endif

        <br><label>Phone Number</label><br>
        <br><input type="text" name="phone" id="phone" class="form-control">

              @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span><br>
              @endif
          
        <br><input type="submit" value="Save" class="btn btn-success"><br>
        
      </form>
  </div>
</div>
  
@stop










