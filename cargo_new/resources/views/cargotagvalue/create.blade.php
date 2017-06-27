@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Cargo Tag Value</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cargoTagValue.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('message'))
        <div class="alert alert-warning">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div> 
    @endif

    {!! Form::open(array('route' => 'cargoTagValue.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cargo Text Tag Id:</strong>
                {!! Form::select('cargoTextTagId', $cargoTextTags, null , array('class' => 'form-control') ) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cargo Id:</strong>
                {!! Form::select('cargoId', $cargos, null , array('class' => 'form-control') ) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Value:</strong>
                {!! Form::text('value', null, array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection