@extends('layouts.app')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Cargo Tag Value</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cargoTagValue.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cargo Tag Value Id:</strong>
                {{ $cargoTagValue->cargoTagValueId }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cargo Id:</strong>
                {{ $cargoTagValue->cargoId }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Value:</strong>
                {{ $cargoTagValue->value }}
            </div>
        </div>
    </div>


@endsection