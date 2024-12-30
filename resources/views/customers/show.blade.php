@extends('customers.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Firma</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nazwa : {{ $customers->name }}</h5>
        <p class="card-text">Adres : {{ $customers->address }}</p>
        <p class="card-text">Miasto : {{ $customers->city }}</p>
        <p class="card-text">NIP : {{ $customers->NIP }}</p>
        <p class="card-text">Kod pocztowy : {{ $customers->zipcode }}</p>
  </div>
       
    </hr>
  
  </div>
</div>