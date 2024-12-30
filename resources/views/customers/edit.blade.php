@extends('customers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edycja</div>
  <div class="card-body">
      
      <form action="{{ url('api/customer/' .$customers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" />
        <label>Nazwa</label></br>
        <input type="text" name="name" id="name" value="{{$customers->name}}" class="form-control"></br>
        <label>Adres</label></br>
        <input type="text" name="address" id="address" value="{{$customers->address}}" class="form-control"></br>
        <label>Miasto</label></br>
        <input type="text" name="city" id="city" value="{{$customers->city}}" class="form-control"></br>
        <label>NIP</label></br>
        <input type="text" name="NIP" id="NIP" pattern="^[0-9]{10}$" value="{{$customers->NIP}}" class="form-control"></br>
        <label>Kod pocztowy</label></br>
        <input type="postal_code" name="zipcode" id="zipcode" pattern="^[0-9]{2}-[0-9]{3}$" value="{{$customers->zipcode}}" class="form-control"></br>
        <input type="submit" value="Zapisz" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop