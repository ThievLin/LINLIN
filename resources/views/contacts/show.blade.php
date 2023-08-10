@extends('contacts.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h6 class="card-text">Address : {{ $contacts->address }}</h6>
        <h6 class="card-text">email : {{ $contacts->email }}</h6>
        <h6 class="card-text">phone : {{ $contacts->phone }}</h6>

  </div>
    <hr>
  </div>
</div>









