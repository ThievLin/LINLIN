@extends('subjects.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Subjects Page</h3></div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-text">Subject : {{ $subjects->Skill }}</p>
        <p class="card-text">Time To Study : {{ $subjects->time }}</p>
        <p class="card-text">Teacher Name : {{ $subjects->teacher }}</p>
        <br>
        <hr>
        <a href="{{ url('/subject') }}" title="Back to Subject"><button class="btn btn-info btn-sm">--Back--</button></a>
  </div>
    <hr>
  </div>
</div>