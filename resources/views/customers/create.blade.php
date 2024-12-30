@extends('customers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Dodaj firmę</div>
  <div class="card-body">
      
      <form action="{{ url('api/customer') }}" method="post">
        {!! csrf_field() !!}
        <label>Nazwa</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Adres</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Miasto</label></br>
        <input type="text" name="city" id="city" class="form-control"></br>
        <label>NIP</label></br>
        <input type="text" name="NIP" id="NIP" placeholder="0123456789" pattern="^[0-9]{10}$" class="form-control"></br>
        <label>Kod pocztowy</label></br>
        <input type="postal_code" name="zipcode" placeholder="00-000" pattern="^[0-9]{2}-[0-9]{3}$" id="zipcode" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop