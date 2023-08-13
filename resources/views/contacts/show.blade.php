@extends('contacts.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h6 class="card-text">Address : {{ $contacts->address }}</h6>
        <h6 class="card-text">Email : {{ $contacts->email }}</h6>
        <h6 class="card-text">Phone : {{ $contacts->phone }}</h6>
        <br>
        <a href="{{ url('/contact') }}" class="btn btn-success btn-sm" title="Add New Student"> Back </a>

  </div>
    <hr>
  </div>
</div>









