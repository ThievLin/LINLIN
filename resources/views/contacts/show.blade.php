@extends('contacts.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"><h3>Contact Page</h3></div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-text">Address : {{ $contacts->address }}</p>
        <p class="card-text">Email : {{ $contacts->email }}</p>
        <p class="card-text">Phone Number : {{ $contacts->phone }}</p>
        <br>
        <hr>
        <a href="{{ url('/contact') }}" title="Back to Contact"><button class="btn btn-info btn-sm">--Back--</button></a>
  </div>
    <hr>
  </div>
</div>









