<?php

namespace App\Http\Controllers;
use App\Models\Debtors;
use App\Models\Lending;
use Illuminate\Http\Request;

class DebtorsController extends Controller
{
    public function index(){

        $Debtors = Lending::paginate(5);
        return view('Debtors.index', compact('Debtors'));
       }
    
        public function create()
        {
            return view('lending.create');
        }
        public function store(Request $request)
        {
            $request->validate([
                'borrowname'=>'required',
                'borrowerdate'=>'required',
                'borroweramount'=>'required',
                'borrowerremarks'=>'required',
            ]);
            lending::create($request->post());
            return redirect()->route('Debtors.index')->with('success','Debtor is added');
        }
        public function show(lending $Debtors)
        {
            return view('Debtors.show', compact('Debtors'));
        }
        public function edit(lending $Debtors)
        {
            return view('Debtors.edit', compact('Debtors'));
        }
        public function update(Request $request, lending $Debtors)
        {
           $request->validate([
            'borrowname'=>'required',
            'borrowerdate'=>'required',
            'borroweramount'=>'required',
            'borrowerremarks'=>'required',
           ]);
           $employee->fill($request->post())->save();
    
           return redirect()->route('Debtors.index')->with('success', 'Debtor has been updated!!');
    
        }
       
        public function destroy(Lendings $Debtors)
        {
            $employee ->delete();
            return redirect()->route('Debtors.index')->with('success','Debtor deleted!!');
        }
}
