<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;
use App\Employees;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $employee = Employees::paginate(10);
        return view('webpage.Employees',compact('employee'));
    }
    public function create(){
        $company = Companies :: all();
        return view('webpage.CreateEmployee',compact('company'));
    }
    public function store(){

        $data = request()->validate([
            'fname' => 'required|min:3',
            'lname'=> 'required|min:3',
            'company_id' => 'required',
            'email' =>'required|unique:employees,email',
            'phone' =>'required|min:12',
        ]);
        Employees::create($data);
        return redirect('/employees');
    }
    public function show ($employee){
        $company = Companies :: all();
        $employees = Employees::find($employee);
        return view('webpage.EmployeeProfile',compact('employees','company'));
    }
    public function edit ($employee){
        $company = Companies :: all();
        $employees = Employees::find($employee);
        return view('webpage.EmployeeEdit',compact('employees','company'));
    }
    public function update($employee)
    {
        $data=request()->validate([
            'fname' => 'required|min:3',
            'lname'=> 'required|min:3',
            'company_id' => 'required',
            'email' =>'required|unique:employees,email,'.$employee,
            'phone' =>'required|min:12',
        ]);

            Employees ::whereId($employee)->update($data);
            $company = Companies :: all();
            $employees = Employees::find($employee);

            return view('webpage.EmployeeProfile',compact('employees','company'));

    }
    public function destroy ($employee){
        $employees = Employees::find($employee);
        $employees->delete();
        return redirect('/employees');
    }
}
