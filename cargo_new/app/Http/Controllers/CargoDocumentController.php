<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\CargoDocument;

use App\Cargo;
use App\Agent;
use App\Customer;
use App\StorageLocation;

use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;

class CargoDocumentController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $companyId = Auth::user()->companyId ;
        $cargoDocuments = CargoDocument::all();
        return View::make('cargodocument.index')->with('cargoDocuments', $cargoDocuments);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        $companyId = Auth::user()->companyId ;
        $cargo_id    = Cargo::where('companyId',$companyId)->pluck('id', 'id');
        return  View::make('cargodocument.create')
                ->with('cargo_id', $cargo_id);
    }
 
 
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){
        $companyId = Auth::user()->companyId ;
        $data = Input::all();

        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads/cargos'; 
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = time().'.'.$extension; 
            Input::file('image')->move($destinationPath, $fileName); 
            $fileName = $destinationPath .'/'. $fileName  ;  
        }else{
            $fileName = ''  ;  
        }

        $cargoDArray = array(
                'cargoId'   => $data['cargo_id'],
                'label'=> $data['label'],
                'fileName'=> $fileName ,
                'type'=> $data['type'],
                'description'=> $data['description'],
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                );

        $cargoDocument = CargoDocument::create($cargoDArray);

        if($cargoDocument->save()){
            return Redirect::route('cargoDocument.index');
        }
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id){
        $cargoDocument = CargoDocument::find($id);
        return View::make('cargodocument.show')
               ->with('cargoDocument', $cargoDocument);
    } 
 
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id){
        $companyId     = Auth::user()->companyId ;
        $cargo_id      = Cargo::where('companyId',$companyId)->pluck('id', 'id');
        $cargoDocument = CargoDocument::find($id);
        return View::make('cargodocument.edit')
               ->with('cargoDocument', $cargoDocument)
               ->with('cargo_id', $cargo_id);
    }
 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id){
        $cargoDocument = CargoDocument::find($id);
        $cargoDocument->cargoId = Input::get('cargo_id');
        $cargoDocument->label = Input::get('label');
        $cargoDocument->type = Input::get('type');
        $cargoDocument->description = Input::get('description');
        $cargoDocument->updated_at = date('Y-m-d H:i:s');

        if (Input::hasFile('image')){
            if (Input::file('image')->isValid()) {
                $destinationPath = 'uploads/cargos'; 
                $extension = Input::file('image')->getClientOriginalExtension();
                $fileName = time().'.'.$extension; 
                Input::file('image')->move($destinationPath, $fileName);  
                $cargoDocument->fileName = $destinationPath.'/'.$fileName ;
            }
        }

        if($cargoDocument->save()){
            return Redirect::route('cargoDocument.index');
        } 
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        CargoDocument::destroy($id);
        Session::flash('message', 'You have successfull deleted a cargo');
        return Redirect::route('cargoDocument.index');
    }
 }
 
 