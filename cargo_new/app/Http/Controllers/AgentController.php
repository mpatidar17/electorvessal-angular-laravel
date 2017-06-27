<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\CompaniesUsers;

use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;
use DB;
use Validator;

class AgentController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){

        //$companyId = Auth::user()->companyId ;

        $data = Input::all();
        $companyId =  $data['company_id'];
        $agents = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->select('users.*', 'companiesUsers.type')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','agent')
            ->get();

        //$agents = User::all();    

        return response()->json($agents);   
        //return View::make('agent.index')->with('agents', $agents);*/
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        return  View::make('agent.create');
    }
 
 
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){

        //$companyId = Auth::user()->companyId ;
        $companyId = 1;
        $data = Input::all();

        $validator = Validator::make($data,[
            'email' => 'required|string|email|unique:users',
            'password' => 'required'
            ]);

        if( $validator->fails() ){

        return response()->json(['errors' => $validator->errors()]);

        }

        $agent_obj = User::where('email',$data['email'])->get();
        if(count($agent_obj) > 0 ){
            return '<font color="red"  align="center">Email already Exist!</font>';
        }else{
            $password = Hash::make( $data['password'] );
            $agent_array = array(
                        'companyId' => $companyId ,
                        'firstName'   => $data['firstName'],
                        'middleInitial'=> $data['middleInitial'],
                        'lastName'=> $data['lastName'],
                        'email'=> $data['email'],
                        'password' => $password,
                        'activeStatus' => 1 ,
                        'created_at'=>date('Y-m-d H:i:s'),
                        'updated_at'=>date('Y-m-d H:i:s')
                    ); 

            $agent = User::create($agent_array);
            $agent->save();
            $userId = $agent->id ;

            $company_user_array = array(
                'companyId' => $companyId ,
                'userId' => $userId ,
                'type' => 'agent',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                );
            $companiesUsers = CompaniesUsers::create($company_user_array);
            if($companiesUsers->save()){
                //return Redirect::route('agent.index');
                return response()->json(['message'=>'Agent created successfully']);
            }else{
                return response()->json(['message'=>'Agent is not ceated successfully.. something is wrong!']);
            } 
        }
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function show($id){
        $agent = User::find($id);
        return response()->json($agent);
        //return View::make('agent.show')->with('agent', $agent);
    } 
 
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function edit($id){
        $agent = User::find($id);
        return View::make('agent.edit')
               ->with('agent', $agent);
    }
 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
    */
    public function update(){


        $agent = User::find(Input::get('id'));
        
        $agent->firstName = (!empty( Input::get('firstName') )) ? Input::get('firstName') : $agent->firstName ;
        
        $agent->middleInitial = (!empty( Input::get('middleInitial') )) ? Input::get('middleInitial') : $agent->middleInitial ;
        
        $agent->lastName = (!empty( Input::get('lastName') )) ? Input::get('lastName') : $agent->lastName;
        
        $agent->email = (!empty( Input::get('email') )) ? Input::get('email') : $agent->email;
        
        $agent->updated_at = date('Y-m-d H:i:s'); 
        if($agent->save()){
            return response()->json(['message'=>'Agent Updated successfully']);
        }else{
            return response()->json(['message'=>'Agent is not updated successfully.. something is wrong!']);
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
        /*$companyId = Auth::user()->companyId ;
        $agents = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->select('users.*', 'companiesUsers.type')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','agent')
            ->get();*/
         return response()->json(['message'=>'Agent Deleted Successfully']);   
        //return View::make('agent.list')->with('agents', $agents);
    }


    /**
     * Dashboard
     *
    */
    public function dashboard(){
        return View::make('agent.dashboard');
    }


    public function list(){
        $companyId = Auth::user()->companyId ;
        //$agents = Agent::where('companyId',$companyId)->get(); 
        $agents = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->select('users.*', 'companiesUsers.type')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','agent')
            ->get();
        return View::make('agent.list')->with('agents', $agents);
    }
 }
 #end of the class
 
 