<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{

    protected $employee;
    protected $customer;

    public function __construct(){

        $this->employee = new Employee();
        $this->customer = new Customer();
    }


    public function index()
    {
        
        $response['employees'] = $this->employee->all();
        $response['customers'] = $this->customer->all();
        return view('employees.index')->with($response);
    }

    
    public function store(Request $request)
    {
        // $validator = Validator::make($request()->all(), ['fname' => 'required', 'sname' => 'required', 'email' => 'required'|'email']);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'error' => $validator->errors()
        //     ]);
        // }

        $this->employee->create($request->all());
        return redirect()->back();

    }

  
    public function edit(string $id)
    {
        $response['employee'] = $this->employee->find($id);
        return view('employees.edit')->with($response);
    }


    public function update(Request $request, string $id)
    {
        $employee = $this->employee->find($id);

        $employee->update(array_merge($employee->toArray(), $request->toArray()));
        return redirect('api/employee');
    }

    public function destroy(string $id)
    {
        $employee = $this->employee->find($id);
        $employee->delete();
        return redirect('api/employee');
    }
}