@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h6 class="card-text">firstname : {{ $students->firstname }}</h6>
        <h6 class="card-text">lastname : {{ $students->lastname }}</h6>
        <h6 class="card-text">gender : {{ $students->gender }}</h6>
        <h6 class="card-text">age : {{ $students->age }}</h6>
        <h6 class="card-text">dob : {{ $students->dob }}</h6>
  </div>
    <hr>
  </div>
</div>