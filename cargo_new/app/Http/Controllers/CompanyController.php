<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;
use DB;

class CompanyController extends Controller {
    public function companyUserLogin(){
        $data = Input::all();

        //die(bcrypt($data['password']));

        if (Auth::attempt([ 'email' => $data['email'] , 'password' => $data['password'] ])) {
            // Authentication passed...
            $user = DB::table('users')
                ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
                ->where('companiesUsers.type','=','company')
                ->where('email',$data['email'])
                ->select('users.*')
                ->first();
            if(count($user) > 0){
                $response = json_encode($user);
                return  $response ;
            }else{
                echo  0 ;
            }
        }else{
            echo  0 ;
        }

        
    }

    public function updateProfile(){
        $companyId = Auth::user()->companyId ;
        if(Input::get('submit'))
        {
            $company_obj = Company::find($companyId);
            $company_obj->name = Input::get('name');
            $company_obj->description = Input::get('description');
            $company_obj->address1 = Input::get('address1');
            $company_obj->address2 = Input::get('address2');
            $company_obj->city = Input::get('city');
            $company_obj->state = Input::get('state');
            $company_obj->country = Input::get('country');
            $company_obj->zipCode = Input::get('zipCode');
            $company_obj->updated_at = date('Y-m-d H:i:s');

            if (Input::hasFile('image')){
                if (Input::file('image')->isValid()) {
                    $destinationPath = 'uploads/company_logo'; 
                    $extension = Input::file('image')->getClientOriginalExtension();
                    $fileName = time().'.'.$extension; 
                    Input::file('image')->move($destinationPath, $fileName);  
                    $company_obj->logo = $destinationPath.'/'.$fileName ;
                }
            }

            $company_obj->save();
        }    
        
        $company  = Company::find($companyId);
        return  View::make('company.updateprofile')
                ->with('company',$company);
        
    } 
    #end of the function
 }
 
 