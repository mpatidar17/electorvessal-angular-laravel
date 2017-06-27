<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Subscription;
use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;

class SubscriptionController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $subscriptions = Subscription::all();//Subscription::all();
        //return View::make('subscription.index')->with('subscriptions', $subscriptions);
        
        return response()->json($subscriptions);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        return  View::make('subscription.create');
    }
 
 
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){
        $data = Input::all();
        $subscription_array = array(
                'name'   => $data['name'],
                'description'=> $data['description'],
                'price'=> $data['price'],
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
        );
        $subscription = Subscription::create($subscription_array);
        if($subscription->save()){
            //return Redirect::route('subscription.index');
            return response()->json(["message" => "Subscription Created Successfully"]);
        }
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id){
        $subscription = Subscription::find($id);
        //return View::make('subscription.show')->with('subscription', $subscription);
        return response()->json($subscription); 
    } 
 
 
    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function edit($id){
        $subscription = Subscription::find($id);
        return View::make('subscription.edit')
               ->with('subscription', $subscription);
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(){
        $subscription = Subscription::find(Input::get('id'));
        $subscription->name = (!empty( Input::get('name') )) ? Input::get('name') : $subscription->name ;
        $subscription->description = (!empty( Input::get('description') )) ? Input::get('description') : $subscription->description ;
        $subscription->price = (!empty( Input::get('price') )) ? Input::get('price') : $subscription->price ;
        $subscription->updated_at = date('Y-m-d H:i:s');
        if($subscription->save()){
            //return Redirect::route('subscription.index');
            return response()->json(['message'=>'Subscription Updated Successfully']);
        } 
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        Subscription::destroy($id);
        //Session::flash('message', 'You have successfull deleted a Subscription');
        //return Redirect::route('subscription.index');
    
        return response()->json(['message' => 'Subscription Deleted Successfully']);
    }

}
 
 