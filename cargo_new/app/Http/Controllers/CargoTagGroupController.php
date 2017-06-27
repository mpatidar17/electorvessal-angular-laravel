<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Customer;
use App\CargoTagGroup;

use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;

class CargoTagGroupController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        //$companyId = Auth::user()->companyId ;
        $companyId = 1;
        $cargoTagGroups = CargoTagGroup::where('companyId',$companyId)->get(); 
        
        return response()->json($cargoTagGroups);
        //return View::make('cargotaggroup.index')->with('cargoTagGroups', $cargoTagGroups);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        return  View::make('cargotaggroup.create');
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
        $ctg_array = array(
                    'companyId' => $companyId ,
                    'name' => $data['name'],
                    'description'   => $data['description'],
                    'order'=> $data['order'],
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s') 
                );        
        $ctg = CargoTagGroup::create($ctg_array);
        if($ctg->save()){
            //return Redirect::route('cargoTagGroup.index');

            return response()->json(['message' => 'Cargo Tag Group Created Successfully']);
        }
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function show($id){
        $cargoTagGroup = CargoTagGroup::find($id);
        //return View::make('cargotaggroup.show')->with('cargoTagGroup', $cargoTagGroup);
    
        return response()->json($cargoTagGroup);
    } 
 
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function edit($id){
        $cargoTagGroup = CargoTagGroup::find($id);
        return View::make('cargotaggroup.edit')
               ->with('cargoTagGroup',$cargoTagGroup);
    }
 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(){
        $cargoTagGroup = CargoTagGroup::find(Input::get('id'));
        $cargoTagGroup->name = ( !empty(Input::get('name')) ) ? Input::get('name') : $cargoTagGroup->name;
        $cargoTagGroup->description = ( !empty(Input::get('description')) ) ? Input::get('description') : $cargoTagGroup->description;
        $cargoTagGroup->order = ( !empty(Input::get('order')) ) ? Input::get('order') : $cargoTagGroup->order;
        $cargoTagGroup->updated_at = date('Y-m-d H:i:s'); 
        if($cargoTagGroup->save()){
            //return Redirect::route('cargoTagGroup.index');

            return response()->json(['message' => 'Cargo Tag Group Updated Successfully']);
        } 
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        CargoTagGroup::destroy($id);
        /*Session::flash('message', 'You have successfull deleted a Cargo Tag Group');
        return Redirect::route('cargoTagGroup.index');*/

        return response()->json(['message' => 'Cargo Tag Group Deleted Successfully']);

    }

 }
 
 