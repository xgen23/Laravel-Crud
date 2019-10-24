<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;
use App\Employees;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $companies = Companies :: paginate(10);
        return view('webpage.Companies',compact('companies'));
    }

    public function create(){
        return view('webpage.CreateCompany');
    }

    public function store(){
        $data = request()->validate([
            'name' =>'required|unique:companies,name',
            'email' =>'unique:companies,email',
            'logo' =>'sometimes|image:jpeg,png,bmp,gif,svg|max:10000|dimensions:min_width=100,min_height=100',
            'website'=>'',
        ]);

            if(request()->has('logo')){
               $company = new Companies();
               $company->name = request('name');
               $company->email = request('email');
               $company->logo =request()->file('logo')->store('logo','public');
               $company->website = request('website');
              $company->save();

              return redirect('/companies');
            }else{

                $company = new Companies();
                $company->name = request('name');
                $company->email = request('email');
                $company->website = request('website');
                $company->save();
                return redirect('/companies');
            }
        }
        public function show ($company){
            $companies = Companies::find($company);
            return view('webpage.CompanyProfile',compact('companies'));
        }
        public function edit ($id){
           $company = Companies:: find($id);
           return view('webpage.EditCompanyProfile',compact('company'));
        }
        public function update ($id){
            // dd($id);
            $data = request()->validate([
                'name' =>'required|unique:companies,name,'.$id,
                'email' =>'unique:companies,email,'.$id,
                'logo' =>'sometimes|image:jpeg,png,bmp,gif,svg|max:10000|dimensions:min_width=100,min_height=100',
                'website'=>'',
            ]);
            if(request()->has('logo')){
                $companies =  Companies::find($id);
                $companies->name = request('name');
                $companies->email = request('email');
                $companies->logo =request()->file('logo')->store('logo','public');
                $companies->website = request('website');
                $companies->save();

                // dd($company);
             return view('webpage.CompanyProfile',compact('companies'));
             }else{

                 Companies::whereId($id)->update($data);
                //  dd($company);
                $companies =  Companies::find($id);
                 return view('webpage.CompanyProfile',compact('companies'));
             }
         }

         public function destroy ($id){
             $employee = Employees::where('company_id',$id)->count();
            //  dd($employee);
            if($employee > 0){
                $meesage ='Unable to delete theire are employees in this company';
                return redirect('/companies');
            }else{
            $company = Companies::find($id);
            $company->delete();
            return redirect('/companies');
            }
        }

}
