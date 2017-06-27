<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\InvoiceItem;
use App\Invoice;
use App\Subscription;
use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;

class InvoiceItemController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $invoiceItems = InvoiceItem::all();
        //return View::make('invoiceitem.index')->with('invoiceItems', $invoiceItems);
        
        return response()->json($invoiceItems);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        //$companyId = Auth::user()->companyId ;

        $companyId = 1;

        $invoices  = Invoice::where('companyId',$companyId)->get();

        $subscriptions  = Subscription::all();

        /*return  View::make('invoiceitem.create')
                ->with('invoices',$invoices)
                ->with('subscriptions',$subscriptions);*/
    
        return response()->json(["invoices" => $invoices,"subscriptions" => $subscriptions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(){
        $data = Input::all();
        $invoice_item_array = array(
                'invoiceId'   => $data['invoiceId'],
                'subscriptionId'=> $data['subscriptionId'],
                'quantity'=> $data['quantity'],
                'total'=> $data['total'],
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
        );
        $invoiceItem = InvoiceItem::create($invoice_item_array);
        if($invoiceItem->save()){
            //return Redirect::route('invoiceItem.index');
            return response()->json(['message' => 'Invoice Item Created Successfully']);
        }
    }
  
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id){
        $invoice = InvoiceItem::find($id);
        //return View::make('invoice.show')->with('invoice', $invoice);
        
        return response()->json($invoice);
    } 
 
 
    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
    */
    public function edit($id){
        //$companyId = Auth::user()->companyId ;
        
        $companyId = 1;

        $invoices  = Invoice::where('companyId',$companyId)->get();
        $subscriptions  = Subscription::all();

        $invoiceItem = InvoiceItem::find($id);
        /*return View::make('invoiceitem.edit')
               ->with('invoiceItem', $invoiceItem)
               ->with('invoices', $invoices)
               ->with('subscriptions', $subscriptions);*/

        return response()->json(["invoices" => $invoices,"subscriptions" => $subscriptions,"invoiceItem" => $invoiceItem]);       
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(){
        $invoiceItem = InvoiceItem::find(Input::get('id'));
        $invoiceItem->invoiceId = ( !empty(Input::get('invoiceId')) ) ? Input::get('invoiceId') : $invoiceItem->invoiceId;
        $invoiceItem->subscriptionId = ( !empty(Input::get('subscriptionId')) ) ? Input::get('subscriptionId') : $invoiceItem->subscriptionId;
        $invoiceItem->quantity = ( !empty(Input::get('quantity')) ) ? Input::get('quantity') : $invoiceItem->quantity;
        $invoiceItem->total = ( !empty(Input::get('total')) ) ? Input::get('total') : $invoiceItem->total;
        $invoiceItem->updated_at = date('Y-m-d H:i:s');
        if($invoiceItem->save()){
            //return Redirect::route('invoiceItem.index');

            return response()->json(['message' => 'Invoice Item Updated Successfully']);
        } 
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        InvoiceItem::destroy($id);
        /*Session::flash('message', 'You have successfull deleted a Invoice Item');
        return Redirect::route('invoiceItem.index');*/

        return response()->json(['message' => 'Invoice Item Deleted Successfully']);
    }

}
 
 