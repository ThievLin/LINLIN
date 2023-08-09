@extends('contacts.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit contact</div>

  <div class="card-body">
       
    <form action="{{ url('contact/' .$contacts->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")

      <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />

        <br><label>Address</label><br>
        <br><input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control">

              @if ($errors->has('address'))
                  <span class="text-danger">{{ $errors->first('address') }}</span><br>
              @endif

        <br><label>email</label><br>
        <br><input type="text" name="email" id="email" value="{{$contacts->email}}" class="form-control">

              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span><br>
              @endif

        <br><label>phone</label><br>
        <br><input type="text" name="phone" id="phone" value="{{$contacts->phone}}" class="form-control">

              @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span><br>
              @endif

        <br><input type="submit" value="Save" class="btn btn-success"><br>
         
      </form>

</div>

</div>
  
@stop
