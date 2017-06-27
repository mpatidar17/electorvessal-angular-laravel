@extends('layouts.app')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Invoice</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('invoice.create') }}"> Create New </a>
            </div>
        </div> 
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Invoice Number</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($invoices as $key => $item)
    <tr>
        <td>{{ ($key+1) }}</td>
        <td>{{ $item->invoiceNumber }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('invoice.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('invoice.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['invoice.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    

@endsection