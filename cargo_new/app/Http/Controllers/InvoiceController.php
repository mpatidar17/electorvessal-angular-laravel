<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Invoice;
use View;
use Redirect; 
use Auth;
use Illuminate\Support\Facades\Input;
use Session;

class InvoiceController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $invoices = Invoice::all();
        //return View::make('invoice.index')->with('invoices', $invoices);

        return response()->json($invoices);
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        return  View::make('invoice.create');
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
        $invoice_array = array(
                'companyId'   => $companyId,
                'periodFrom'=> $data['periodFrom'],
                'periodTo'=> $data['periodTo'],
                'status'=> $data['status'],
                'periodFrom'=> $data['periodFrom'],
                'invoiceNumber'=> $data['invoiceNumber'],
                'paidOn'=> $data['paidOn'],
                'total'=> $data['total'],
                'status'=> $data['status'],
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
        );
        $invoice = Invoice::create($invoice_array);
        if($invoice->save()){
            //return Redirect::route('invoice.index');

            return response()->json(['message' => 'Invoice Created Successfully']);
        }
    }
 
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id){
        $invoice = Invoice::find($id);
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
        $invoice = Invoice::find($id);
        return View::make('invoice.edit')
               ->with('invoice', $invoice);
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(){
        $invoice = Invoice::find(Input::get('id'));
        $invoice->invoiceNumber = ( !empty(Input::get('invoiceNumber')) ) ? Input::get('invoiceNumber') : $invoice->invoiceNumber;
        $invoice->periodFrom = ( !empty(Input::get('periodFrom')) ) ? Input::get('periodFrom') : $invoice->periodFrom;
        $invoice->periodTo = ( !empty(Input::get('periodTo')) ) ? Input::get('periodTo') : $invoice->periodTo;
        $invoice->paidOn = ( !empty(Input::get('paidOn')) ) ? Input::get('paidOn') : $invoice->paidOn;
        $invoice->total = ( !empty(Input::get('total')) ) ? Input::get('total') : $invoice->total;
        $invoice->status = ( !empty(Input::get('status')) ) ? Input::get('status') : $invoice->status;
        $invoice->updated_at = date('Y-m-d H:i:s');
        if($invoice->save()){
            //return Redirect::route('invoice.index');

            return response()->json(['message' => 'Invoice Updated Successfully']);
        } 
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        Invoice::destroy($id);
        /*Session::flash('message', 'You have successfull deleted a Invoice');
        return Redirect::route('invoice.index');*/

        return response()->json(['message' => 'Invoice Deleted Successfully']);
    }

}
 
 