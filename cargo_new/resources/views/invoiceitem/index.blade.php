@extends('layouts.app')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Invoice Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('invoiceItem.create') }}"> Create New</a>
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
            <th>Invoice Id</th>
            <th>Subscription Id</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($invoiceItems as $key => $item)
    <tr>
        <td>{{ ($key+1) }}</td>
        <td>{{ $item->invoiceId }}</td>
        <td>{{ $item->subscriptionId }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('invoiceItem.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('invoiceItem.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['invoiceItem.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    

@endsection