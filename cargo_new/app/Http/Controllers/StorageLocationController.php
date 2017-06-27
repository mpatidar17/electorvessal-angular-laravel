<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\StorageLocation;
use App\Country;
use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;

class StorageLocationController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        //$companyId = Auth::user()->companyId ;
            
        $companyId = 1;    

        $storagelocation = StorageLocation::where('companyId',$companyId)->get();
        //return View::make('storagelocation.index')->with('storagelocations', $storagelocation);

        return response()->json($storagelocation);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        return View::make('storagelocation.create');
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
        $storageLocation = StorageLocation::create(array(
                'companyId' => $companyId ,
                'label'=> $data['label'],
                'address1'=> $data['address1'],
                'address2'=> $data['address2'],
                'city'=> $data['city'],
                'state'=> $data['state'],
                'country'=> $data['country'],
                'zipCode'=> $data['zipCode'] ,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ));
        /*if($storageLocation->save()){
            return Redirect::route('storagelocation.index');
        }*/
        if($storageLocation->save()){
                //return Redirect::route('agent.index');
                //return '<font color="green" align="center">Storage Location created successfully</font>';
                return response()->json(['message' => 'Storage Location Created Successfully']);
        }else{
                //return '<font color="red"  align="center">Storage Location is not ceated successfully.. something is wrong!</font>';
                return response()->json(['errors' => 'Storage Location is not ceated successfully.. something is wrong!']);

        } 
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id){
        $storageLocation = StorageLocation::find($id);
        //return View::make('storagelocation.show')->with('storageLocation', $storageLocation);

        return response()->json($storageLocation);
    } 
 
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id){
        $storageLocation = StorageLocation::find($id);
        return View::make('storagelocation.edit')->with('storageLocation', $storageLocation);
    }
 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(){
 
        //$companyId = Auth::user()->companyId ;

        $companyId = 1;

        $storageLocation = StorageLocation::find( Input::get('id') );
        
        $storageLocation->companyId  = $companyId;
        $storageLocation->label = ( !empty(Input::get('label')) ) ? Input::get('label') : $storageLocation->label;
        $storageLocation->address1 = ( !empty(Input::get('address1')) ) ? Input::get('address1') : $storageLocation->address1;
        $storageLocation->address2 = ( !empty(Input::get('address2')) ) ? Input::get('address2') : $storageLocation->address2;
        $storageLocation->city = ( !empty(Input::get('city')) ) ? Input::get('city') : $storageLocation->city;
        $storageLocation->state = ( !empty(Input::get('state')) ) ? Input::get('state') : $storageLocation->state;
        $storageLocation->country = ( !empty(Input::get('country')) ) ? Input::get('country') : $storageLocation->country;
        $storageLocation->zipCode = ( !empty(Input::get('zipCode')) ) ? Input::get('zipCode') : $storageLocation->zipCode;
        $storageLocation->updated_at = date('Y-m-d H:i:s');
 
        if($storageLocation->save()){
                //return '<font color="green" align="center">Storage Location updated successfully</font>';
            return response()->json(['message' => 'Storage Location Updated Successfully']);
        }else{
                //return '<font color="red"  align="center">Storage Location is not ceated successfully.. something is wrong!</font>';
            return response()->json(['errors' => 'Storage Location is not ceated successfully.. something is wrong!']);
        } 
        /*if($storageLocation->save()){
            return Redirect::route('storagelocation.index');
        } */ 
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        StorageLocation::destroy($id);
        // $companyId = Auth::user()->companyId ;
        // $storagelocation = StorageLocation::where('companyId',$companyId)->get();
        // return View::make('storagelocation.list')->with('storagelocations', $storagelocation);

        return response()->json(['message' => 'Storage Location Deleted Successfully']);
    }

    public function list(){
        $companyId = Auth::user()->companyId ;
        $storagelocation = StorageLocation::where('companyId',$companyId)->get();
        return View::make('storagelocation.list')->with('storagelocations', $storagelocation);
    }
    #end of the list function
 
 }
 
 