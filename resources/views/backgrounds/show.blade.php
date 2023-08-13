@extends('backgrounds.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">background Page</div>
  <div class="card-body">
        <div class="card-body">
        <h6 class="card-text">highschool : {{ $backgrounds->highschool }}</h6>
        <h6 class="card-text">graduate : {{ $backgrounds->graduate }}</h6>
        <br>
        <a href="{{ url('/background') }}" class="btn btn-success btn-sm" title="Add New Student"> Back </a>
  </div>
    <hr>
  </div>
</div>