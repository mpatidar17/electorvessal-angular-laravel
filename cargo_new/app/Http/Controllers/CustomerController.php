<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\AgentsCustomers;
use App\CompaniesUsers;

use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;
use DB;
use Validator;

class customerController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        //$companyId = Auth::user()->companyId ;
        //$customers = Customer::where('companyId',$companyId)->get(); 
        
        $companyId = 1;
        $customers = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->join('agentsCustomers', 'users.id', '=', 'agentsCustomers.customerId')
            ->select('users.*', 'companiesUsers.type')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','customer')
            ->get();
        return response()->json($customers);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        $companyId = 1;
        //$agents    = Agent::where('companyId',$companyId)->pluck('firstName', 'id');
        $agents    =  DB::table('users')
                      ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
                      ->select('users.*', 'companiesUsers.type')
                      ->where('users.companyId','=',$companyId)
                      ->where('companiesUsers.companyId','=',$companyId)
                      ->where('companiesUsers.type','=','agent')
                      ->get();

        //return  View::make('customer.create')->with('agents', $agents);
        return response()->json($agents);

    }
 
 
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){
        $companyId = 1 ;
        $data = Input::all();

        $validator = Validator::make($data,[
            'email' => 'required|string|email|unique:users',
            'password' => 'required'
            ]);

        if( $validator->fails() ){

        return response()->json(['errors' => $validator->errors()]);

        }

        $customer_obj = User::where('email',$data['email'])->get();
       
        $password = Hash::make( $data['password'] );
        $customer_array = array(
                'companyId' => $companyId ,
                //'agentId' => $data['agent'],
                'firstName'   => $data['firstName'],
                'middleInitial'=> $data['middleInitial'],
                'lastName'=> $data['lastName'],
                'email'=> $data['email'],
                'password' => $password,
                'activeStatus' => 1 ,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s') 
            );        
        $customer = User::create($customer_array);
        $customer->save();
        $userId = $customer->id ;

        $company_user_array = array(
            'companyId' => $companyId ,
            'userId' => $userId ,
            'type' => 'customer',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
            );
        $companiesUsers = CompaniesUsers::create($company_user_array);
        $companiesUsers->save();

        $agent_customer_array = array(
            'agentId' => $data['agent'] ,
            'customerId' => $userId ,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
            );
        $agentsCustomers = AgentsCustomers::create($agent_customer_array);
        if($agentsCustomers->save()){
            return response()->json(['message'=>'Agent created successfully']);
        }
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function show($id){
        $customer = User::find($id);
        //return View::make('customer.show')->with('customer', $customer);
        
        return response()->json($customer);
    } 
 
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function edit($id){
        $companyId = Auth::user()->companyId ;
        //$agents    = Agent::where('companyId',$companyId)->pluck('firstName', 'id');
        $agents    =  DB::table('users')
                      ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
                      ->select('users.*', 'companiesUsers.type')
                      ->where('users.companyId','=',$companyId)
                      ->where('companiesUsers.companyId','=',$companyId)
                      ->where('companiesUsers.type','=','agent')
                      ->pluck('users.firstName', 'users.id');

        $current_agent =  AgentsCustomers::where('customerId','=',$id)->first();       
        $customer = User::find($id);
        return View::make('customer.edit')
               ->with('customer', $customer)
               ->with('agents', $agents)
               ->with('current_agent',$current_agent)
               ;
    }
 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(){

        //die(print_r(Input::all()));

        $customer = User::find(Input::get('id'));
        //$customer->agentId = Input::get('agent');
        $customer->firstName = (!empty( Input::get('firstName') )) ? Input::get('firstName') : $customer->firstName;
        $customer->middleInitial = (!empty( Input::get('middleInitial') )) ? Input::get('middleInitial') : $customer->middleInitial ;
        $customer->lastName = (!empty( Input::get('lastName') )) ? Input::get('lastName') : $customer->lastName;
        $customer->email = (!empty( Input::get('email') )) ? Input::get('email') : $customer->email;
        $customer->updated_at = date('Y-m-d H:i:s'); 
        $customer->save();
               
        $agentsCustomers = AgentsCustomers::where("customerId",Input::get('id'))->first();
        $agentsCustomers->agentId = ( !empty(Input::get('agent') )) ? Input::get('agent') : $agentsCustomers->agentId ;
        $agentsCustomers->updated_at = date('Y-m-d H:i:s') ;
        $agentsCustomers->save();
        if($agentsCustomers->save()){
            //return Redirect::route('customer.index');
            return response()->json(['message'=>'Customer Updated successfully']);
        } 
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        User::destroy($id);
        // Session::flash('message', 'You have successfull deleted a customer');
        // return Redirect::route('customer.index');
        return response()->json(['message'=>'Customer Deleted Successfully']);
    }

    /**
     * Dashboard
     *
    */
    public function dashboard(){
        return View::make('customer.dashboard');
    }

 }
 
 