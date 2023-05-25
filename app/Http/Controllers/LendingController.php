<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LendingController extends Controller
{
    public function index(){

        $employees = Employee::all();
        $employees = Employee::paginate(5);
        return view('employees.index', compact('employees'));
       }
    
        public function create()
        {
            return view('employees.create');
        }
        public function store(Request $request)
        {
            $request->validate([
                'borrowname'=>'required',
                'borrowerdate'=>'required',
                'borroweramount'=>'required',
                'borrowerremarks'=>'required',
            ]);
            Employee::create($request->post());
            return redirect()->route('employees.index')->with('success','Employee is added');
        }
        public function show(Employee $employee)
        {
            return view('employees.show', compact('employee'));
        }
        public function edit(Employee $employee)
        {
            return view('employees.edit', compact('employee'));
        }
        public function update(Request $request, Employee $employee)
        {
           $request->validate([
            'borrowname'=>'required',
            'borrowerdate'=>'required',
            'borroweramount'=>'required',
            'borrowerremarks'=>'required',
           ]);
           $employee->fill($request->post())->save();
    
           return redirect()->route('employees.index')->with('success', 'Employee has been updated!!');
    
        }
       
        public function destroy(Employee $employee)
        {
            $employee ->delete();
            return redirect()->route('employees.index')->with('success','Employee deleted!!');
        }
}
