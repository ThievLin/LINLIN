@extends('subjects.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">subjects Page</div>
  <div class="card-body">
        <div class="card-body">
        <h6 class="card-text">Skill : {{ $subjects->Skill }}</h6>
        <h6 class="card-text">time : {{ $subjects->time }}</h6>
        <h6 class="card-text">Teacher : {{ $subjects->teacher }}</h6>
        <br>
        <a href="{{ url('/subject') }}" class="btn btn-success btn-sm" title="Add New Student"> Back </a>
  </div>
    <hr>
  </div>
</div>