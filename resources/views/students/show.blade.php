@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Students Page</h3></div>
  <div class="card-body">
        <div class="card-body">
        <h6 class="card-text">First Name : {{ $students->firstname }}</h6>
        <h6 class="card-text">Last Name : {{ $students->lastname }}</h6>
        <br>
        <hr>
        <p class="card-text">Gender : {{ $students->gender }}</p>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Date of Birst : {{ $students->dob }}</p>
        <hr>
        <p class="card-text">Photo Of Students : <img src="{{ asset('/storage/images/students/'.$students->image) }}" width= '500' height='500' /> </p>
        <br>
        <hr>
        <a href="{{ url('/student') }}"  title="Back to Student"> <button class="btn btn-info btn-sm">--Back--</button></a>
  </div>
    <hr>
  </div>
</div>