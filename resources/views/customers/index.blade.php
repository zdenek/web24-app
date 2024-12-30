@extends('customers.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Lista firm</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('api/customer/create') }}" class="btn btn-success btn-sm" title="Add New Customer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Dodaj firmę
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nazwa</th>
                                        <th>Adres</th>
                                        <th>Miasto</th>
                                        <th>NIP</th>
                                        <th>Kod pocztowy</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->NIP }}</td>
                                        <td>{{ $item->zipcode }}</td>
 
                                        <td>
                                            <a href="{{ url('api/customer/' . $item->id) }}" title="View Customer"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Widok</button></a>
                                            <a href="{{ url('api/customer/' . $item->id . '/edit') }}" title="Edit Customer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edycja</button></a>
 
                                            <form method="POST" action="{{ url('api/customer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Customer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Usuń</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection