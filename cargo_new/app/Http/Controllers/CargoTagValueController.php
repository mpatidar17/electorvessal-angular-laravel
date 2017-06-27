<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\CargoTextTag;
use App\CargoTagValue;
use App\Cargo;

use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;

class CargoTagValueController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $cargoTagValues = CargoTagValue::all(); 
        return View::make('cargotagvalue.index')->with('cargoTagValues', $cargoTagValues);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        $companyId = Auth::user()->companyId ;
        $cargoTextTags  = CargoTextTag::all()->pluck('label', 'id');
        $cargos  = Cargo::where('companyId',$companyId)->pluck('id', 'id');
        return  View::make('cargotagvalue.create')
                ->with('cargoTextTags',$cargoTextTags)
                ->with('cargos',$cargos);
    }
 
 
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){
        $data = Input::all();
        $ctv_array = array(
                    'cargoTextTagId' => $data['cargoTextTagId'] ,
                    'cargoId'        => $data['cargoId'], 
                    'value'          => $data['value'],
                    'created_at'     => date('Y-m-d H:i:s'),
                    'updated_at'     => date('Y-m-d H:i:s') 
                );         
        $ctv = CargoTagValue::create($ctv_array);
        if($ctv->save()){
            return Redirect::route('cargoTagValue.index');
        }
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function show($id){
        $cargoTagValue = CargoTagValue::find($id);
        return View::make('cargotagvalue.show')->with('cargoTagValue', $cargoTagValue);
    }
 
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function edit($id){
        $companyId = Auth::user()->companyId ;
        $cargoTextTags  = CargoTextTag::all()->pluck('label', 'id');
        $cargos  = Cargo::where('companyId',$companyId)->pluck('id', 'id');

        $cargoTagValue = CargoTagValue::find($id);
        return View::make('cargotagvalue.edit')
               ->with('cargoTextTags',$cargoTextTags)
               ->with('cargos',$cargos)
               ->with('cargoTagValue',$cargoTagValue)
               ;
    }
 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id){
        $cargoTagValue = CargoTagValue::find($id);
        $cargoTagValue->cargoTextTagId = Input::get('cargoTextTagId');
        $cargoTagValue->cargoId = Input::get('cargoId');
        $cargoTagValue->value = Input::get('value');
        $cargoTagValue->updated_at = date('Y-m-d H:i:s'); 
        if($cargoTagValue->save()){
            return Redirect::route('cargoTagValue.index');
        } 
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        CargoTagValue::destroy($id);
        Session::flash('message', 'You have successfull deleted a Cargo Text Value');
        return Redirect::route('cargoTagValue.index');
    }

 }
 
 