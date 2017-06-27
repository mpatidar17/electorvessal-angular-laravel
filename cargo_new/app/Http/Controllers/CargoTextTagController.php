<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\CargoTextTag;
use App\CargoTagGroup;

use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;

class CargoTextTagController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $cargoTextTags = CargoTextTag::all(); 
        return View::make('cargotexttag.index')->with('cargoTextTags', $cargoTextTags);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        $companyId = Auth::user()->companyId ;
        $cargoTagGroups  = CargoTagGroup::where('companyId',$companyId)->pluck('name', 'id');
        return  View::make('cargotexttag.create')->with('cargoTagGroups',$cargoTagGroups);
    }
 
 
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){
        $data = Input::all();
        $ctt_array = array(
                    'cargoTagGroupId' => $data['cargoTagGroupId'] ,
                    'label' => $data['label'], 
                    'description'   => $data['description'],
                    'required'=> $data['required'],
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s') 
                );         
        $ctt = CargoTextTag::create($ctt_array);
        if($ctt->save()){
            return Redirect::route('cargoTextTag.index');
        }
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function show($id){
        $cargoTextTag = CargoTextTag::find($id);
        return View::make('cargotexttag.show')->with('cargoTextTag', $cargoTextTag);
    }
 
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function edit($id){
        $companyId = Auth::user()->companyId ;
        $cargoTagGroups  = CargoTagGroup::where('companyId',$companyId)->pluck('name', 'id');
        $cargoTextTag = CargoTextTag::find($id);
        return View::make('cargotexttag.edit')
               ->with('cargoTextTag',$cargoTextTag)
               ->with('cargoTagGroups',$cargoTagGroups);
    }
 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id){
        $cargoTextTag = CargoTextTag::find($id);
        $cargoTextTag->cargoTagGroupId = Input::get('cargoTagGroupId');
        $cargoTextTag->label = Input::get('label');
        $cargoTextTag->description = Input::get('description');
        $cargoTextTag->required = Input::get('required');
        $cargoTextTag->updated_at = date('Y-m-d H:i:s'); 
        if($cargoTextTag->save()){
            return Redirect::route('cargoTextTag.index');
        } 
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        CargoTextTag::destroy($id);
        Session::flash('message', 'You have successfull deleted a Cargo Text Tag');
        return Redirect::route('cargoTextTag.index');
    }

 }
 
 