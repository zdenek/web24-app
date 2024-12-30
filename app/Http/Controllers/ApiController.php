<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class ApiController extends Controller
{
    public function create() {
        $customers = new Customer();

        $customers->name = $request->input('name');
        $customers->address = $request->input('address');
        $customers->city = $request->input('city');
        $customers->NIP = $request->input('NIP');
        $customers->zipcode = $request->input('zipcode');

        $customers->save();
        return response()->json($customers);
    }
}
