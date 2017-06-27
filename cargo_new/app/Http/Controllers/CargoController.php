<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Cargo;
use App\CargoTagGroup;
use App\CargoTagValue;
use App\CargoDocument;

use App\Vehicle;
use App\Other;
use App\StorageLocation;

use View;
use Redirect;
use Auth;
use Illuminate\Support\Facades\Input;
use Session;
use DB;

class CargoController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $companyId = Auth::user()->companyId ;
        $cargos = Cargo::where('companyId',$companyId)->get();
        return View::make('cargo.index')->with('cargos', $cargos);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        $companyId = Auth::user()->companyId ;

        $agents = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->select('users.firstName', 'users.id')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','agent')
            ->get();

        $customers = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->select('users.firstName', 'users.id')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','customer')
            ->get();   
        
        $storagelocations = StorageLocation::where('companyId',$companyId)->pluck('label', 'id');

        $cargoTagGroups = CargoTagGroup::all();
        
        return  View::make('cargo.create')
                ->with('agents', $agents)
                ->with('customers', $customers)
                ->with('storagelocations', $storagelocations)
                ->with('cargoTagGroups',$cargoTagGroups);
    }
 
 
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){
        //echo "dfdfdf";die;

        $companyId = Auth::user()->companyId;
        $data = Input::all();
       
        $cargo_array = array(
                'companyId' => $companyId ,
                'agentId'   => $data['agent'],
                'customerId'=> $data['customer'],
                'storageLocationId'=> $data['storagelocation'],
                'width'=> $data['width'],
                'height'=> $data['height'],
                'depth'=> $data['depth'],
                'weight'=> $data['weight'],
                'type'=> $data['cargo_type'],
                'status'=> 1 ,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
        );

        $cargo = Cargo::create($cargo_array);
        $cargo->save();
        $cargoId = $cargo->id ;

        # texttag Starts
        foreach (Input::get('texttags') as $texttag => $value) {
          $cargoTagValue = new CargoTagValue;
          $cargoTagValue->cargoTextTagId = $texttag;
          $cargoTagValue->cargoId = $cargoId;
          $cargoTagValue->value = $value;
          $cargoTagValue->save();
        }
        # texttag Ends

        if(Input::hasFile('image')){    
            $destinationPath = 'uploads/cargos'; 
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = time().'.'.$extension; 
            Input::file('image')->move($destinationPath, $fileName); 
            $fileName = $destinationPath .'/'. $fileName  ;
            $cargoDArray = array(
                'cargoId'   => $cargoId,
                'fileName'=> $fileName ,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                );
            $cargoDocument = CargoDocument::create($cargoDArray);

        }
        
        if($data['cargo_type'] == 'vehicle'){
            $vehicle_array = array(
                'cargoId'   => $cargoId ,
                'vin'=> $data['vin'],
                'make'=> $data['make'],
                'model'=> $data['model'],
                'type'=> $data['vehicle_type'],
                'year'=> $data['year'],
                'key'=> $data['key'],
                'title_status'=> $data['title_status'],
                'title_number'=> $data['title_number'],
                'state'=> $data['state'],
                'color'=> $data['color'],
                'operation_status'=> $data['operation_status'],
                'dismantled_status'=> $data['dismantled_status'],
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            );
            $cargo_type = Vehicle::create($vehicle_array); 
        }else{
            $other_array = array(
                'cargoId'      => $cargoId ,
                'title'        => $data['other_title'],
                'specification'=> $data['specification'],
                'created_at'   =>date('Y-m-d H:i:s'),
                'updated_at'   =>date('Y-m-d H:i:s')
            );
            $cargo_type = Other::create($other_array); 
        }
        //$cargo_type->save(); 
        if($cargo_type->save()){
            return '<font color="green" align="center">Cargo created successfully</font>';
        }else{
            return '<font color="red"  align="center">Cargo is not ceated successfully.. something is wrong!</font>';
        }
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id){
        /*$cargo = Cargo::find($id);
        return View::make('cargo.show')->with('cargo', $cargo);*/

        $_GET['cargoId'] = $id ;
        $companyId = Auth::user()->companyId ;
        $agents = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->select('users.firstName', 'users.id')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','agent')
            ->get();
        $customers = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->select('users.firstName', 'users.id')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','customer')
            ->get();  
        $storagelocations = StorageLocation::where('companyId',$companyId)->pluck('label', 'id');
        $cargoDocuments = CargoDocument::where('cargoId',$id)->get();
        $cargo = Cargo::find($id);
        if($cargo->type == 'vehicle'){
            $cargo_type = Vehicle::where('cargoId','=',$id)->first();
        }elseif($cargo->type == 'other'){
            $cargo_type = Other::where('cargoId','=',$id)->first();
        }
        $cargoTagGroups = CargoTagGroup::all();
        return View::make('cargo.show')
               ->with('cargo', $cargo)
               ->with('agents', $agents)
               ->with('customers', $customers)
               ->with('storagelocations', $storagelocations)
               ->with('cargo_type',$cargo_type)
               ->with('cargoDocuments',$cargoDocuments)
               ->with('cargoTagGroups',$cargoTagGroups)
               ;
    } 
 
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id){
        $_GET['cargoId'] = $id ;
        $companyId = Auth::user()->companyId ;
        $agents = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->select('users.firstName', 'users.id')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','agent')
            ->get();
        $customers = DB::table('users')
            ->join('companiesUsers', 'users.id', '=', 'companiesUsers.userId')
            ->select('users.firstName', 'users.id')
            ->where('users.companyId','=',$companyId)
            ->where('companiesUsers.companyId','=',$companyId)
            ->where('companiesUsers.type','=','customer')
            ->get();  
        $storagelocations = StorageLocation::where('companyId',$companyId)->pluck('label', 'id');
        $cargoDocuments = CargoDocument::where('cargoId',$id)->get();
        $cargo = Cargo::find($id);
        if($cargo->type == 'vehicle'){
            $cargo_type = Vehicle::where('cargoId','=',$id)->first();
        }elseif($cargo->type == 'other'){
            $cargo_type = Other::where('cargoId','=',$id)->first();
        }
        $cargoTagGroups = CargoTagGroup::all();
        return View::make('cargo.edit')
               ->with('cargo', $cargo)
               ->with('agents', $agents)
               ->with('customers', $customers)
               ->with('storagelocations', $storagelocations)
               ->with('cargo_type',$cargo_type)
               ->with('cargoDocuments',$cargoDocuments)
               ->with('cargoTagGroups',$cargoTagGroups)
               ;
    }
 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id){
        $data = Input::all();

        $companyId = Auth::user()->companyId ;
        $cargo = Cargo::find($id);
        $cargo->agentId = Input::get('agent');
        $cargo->customerId = Input::get('customer');
        $cargo->storageLocationId = Input::get('storagelocation');
        $cargo->width = Input::get('width');
        $cargo->height = Input::get('height');
        $cargo->depth = Input::get('depth');
        $cargo->weight = Input::get('weight');
        $cargo->updated_at = date('Y-m-d H:i:s');
        $cargo->save();
        $cargoId = $cargo->id ;

        # texttag Starts
        $tagValueIdArray = Input::get('tagvalue')  ;

        foreach (Input::get('texttags') as $texttag => $value) {
          $cargoTagValue = CargoTagValue::find($tagValueIdArray[$texttag]);
          $cargoTagValue->cargoTextTagId = $texttag;
          $cargoTagValue->value = $value;
          $cargoTagValue->save();
        }
        # texttag Ends

        if(Input::hasFile('image')){
            $destinationPath = 'uploads/cargos'; 
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = time().'.'.$extension; 
            Input::file('image')->move($destinationPath, $fileName); 
            $fileName = $destinationPath .'/'. $fileName  ;
            $cargoDArray = array(
                'cargoId'   => $cargoId,
                'fileName'=> $fileName ,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                );
            $cargoDocument = CargoDocument::create($cargoDArray);
        }


        if($cargo->type == 'vehicle'){
            $vehicle_array = array(
                'vin'=> $data['vin'],
                'make'=> $data['make'],
                'model'=> $data['model'],
                'type'=> $data['vehicle_type'],
                'year'=> $data['year'],
                'key'=> $data['key'],
                'title_status'=> $data['title_status'],
                'title_number'=> $data['title_number'],
                'state'=> $data['state'],
                'color'=> $data['color'],
                'operation_status'=> $data['operation_status'],
                'dismantled_status'=> $data['dismantled_status'],
                'updated_at'=>date('Y-m-d H:i:s')
            );
            
            $cargo_type = Vehicle::where('cargoId', '=', $id)->update($vehicle_array); 
        }else{
            $other_array = array(
                'title'        => $data['other_title'],
                'specification'=> $data['specification'],
                'updated_at'   =>date('Y-m-d H:i:s')
            );
            $cargo_type = Other::where('cargoId', '=', $id)->update($other_array); 
        }
        return '<font color="green" align="center">Cargo updated successfully</font>';
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        Cargo::destroy($id);

        $companyId = Auth::user()->companyId ;
        $cargos = Cargo::where('companyId',$companyId)->get();
        return View::make('cargo.list')->with('cargos', $cargos);
    }


    public function list(){
        $companyId = Auth::user()->companyId ;
        $cargos = Cargo::where('companyId',$companyId)->get();
        return View::make('cargo.list')->with('cargos', $cargos);
    }
    #end of the function
 
 }
 
 