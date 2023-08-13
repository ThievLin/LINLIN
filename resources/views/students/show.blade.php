@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h6 class="card-text">Firstname : {{ $students->firstname }}</h6>
        <hr>
        <br>
        <p class="card-text">Lastname : {{ $students->lastname }}</p>
        <p class="card-text">Gender : {{ $students->gender }}</p>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Date of Birst : {{ $students->dob }}</p>
        <hr>
        <p class="card-text">Photo Of Students : <img src="{{ asset('/storage/images/students/'.$students->image) }}" width= '100' height='100' /> </p>
        <br>
        <a href="{{ url('/student') }}" class="btn btn-success btn-sm" title="Add New Student"> Back </a>
  </div>
    <hr>
  </div>
</div>