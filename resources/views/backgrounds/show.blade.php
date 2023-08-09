@extends('backgrounds.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">background Page</div>
  <div class="card-body">
        <div class="card-body">
        {{-- <h6 class="card-text">student id : {{ $backgrounds->student_id }}</h6> --}}
        <h6 class="card-text">highschool : {{ $backgrounds->highschool }}</h6>
        <h6 class="card-text">graduate : {{ $backgrounds->graduate }}</h6>
  </div>
    <hr>
  </div>
</div>