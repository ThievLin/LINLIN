@extends('backgrounds.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Background Page</h3></div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-text">Highschool : {{ $backgrounds->highschool }}</p>
        <p class="card-text">Year graduate : {{ $backgrounds->graduate }}</p>
        <br>
        <hr>
        <a href="{{ url('/background') }}" title="Back to Background"><button class="btn btn-info btn-sm">--Back--</button></a>
  </div>
    <hr>
  </div>
</div>