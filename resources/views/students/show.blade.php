@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h6 class="card-text">Name : {{ $students->firstname }}</h6>
        <h6 class="card-text">Sex : {{ $students->lasname }}</h6>
        <h6 class="card-text">Birstdate : {{ $students->gender }}</h6>
        <h6 class="card-text">Birstplace : {{ $students->age }}</h6>
        <h6 class="card-text">Email : {{ $students->dob }}</h6>
  </div>
    <hr>
  </div>
</div>