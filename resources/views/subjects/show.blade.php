@extends('subjects.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">subjects Page</div>
  <div class="card-body">
        <div class="card-body">
        <h6 class="card-text">Name : {{ $subjects->Skill }}</h6>
        <h6 class="card-text">Sex : {{ $subjects->time }}</h6>
        <h6 class="card-text">Teacher : {{ $subjects->teacher }}</h6>     
  </div>
    <hr>
  </div>
</div>