@extends('layouts.app')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Invoice</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('invoice.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Invoice Number:</strong>
                {{ $invoice->invoiceNumber }} 
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Period From:</strong>
                {{ $invoice->periodFrom }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Period To:</strong>
                {{ $invoice->periodTo }} 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paid On:</strong>
                {{ $invoice->paidOn }} 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total:</strong>
                {{ $invoice->total }} 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $invoice->status }}
            </div>
        </div>
    </div>

@endsection