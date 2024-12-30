<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $customers = Customer::all();

        return view('customers.index')->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|max:255',
        //     'address' => 'required|string|max:255',
        //     'city' => 'required|string|max:255',
        //     'NIP' => 'required|string|min:10|max:10',
        //     'zipcode' => 'required|min:6|max:6',
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $input = $request->all();
        Customer::create($input);
        return redirect('api/customer')->with('flash_message', 'Customer Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $customers = Customer::find($id);
        return view('customers.show')->with('customers', $customers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $customers = Customer::find($id);
        return view('customers.edit')->with('customers', $customers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $customers = Customer::find($id);
        $input = $request->all();
        $customers->update($input);
        return redirect('api/customer')->with('flash_message', 'Customer Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Customer::destroy($id);
        return redirect('api/customer')->with('flash_message', 'Customer Deleted!'); 
    }
}
