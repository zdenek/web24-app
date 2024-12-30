@extends('employees.layout')
@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Pracownicy</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            
            <div class="form-area">
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                        <label>Firma</label>
                            <select class="form-select" id="company_selected" name="cid">
                            @foreach ( $customers as $key => $customer )
                                <option type="text" value="{{ $customer->id }}" @if (old('cid') == $customer->id) {{ 'selected' }} @endif>{{ $customer->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6">
                            <label>Imię</label>
                            <input type="text" class="form-control" name="fname">
                        </div>
                        <div class="col-md-6">
                            <label>Nazwisko</label>
                            <input type="text" class="form-control" name="sname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>

                        <div class="col-md-6">
                            <label>Numer telefonu</label>
                            <input type="select" class="form-control" name="phone">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Dodaj">
                        </div>

                    </div>
        </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Imię</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Firma</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $employees as $key => $employee )
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $employee->fname }}</td>
                            <td scope="col">{{ $employee->sname }}</td>
                            <td scope="col">{{ $employee->cid }}</td>
                            <td scope="col">{{ $employee->email }}</td>
                            <td scope="col">{{ $employee->phone }}</td>
                            <td scope="col">

                            <!-- <a href="{{  route('employee.edit', $employee->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a> -->
                            
                            <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
    
@endpush
