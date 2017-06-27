@extends('layouts.app')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cargo Tag Value</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cargoTagValue.create') }}"> Create New</a>
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
            <th>Value</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($cargoTagValues as $key => $item)
    <tr>
        <td>{{ ($key+1) }}</td> 
        <td>{{ $item->value }}  </td>

        <td>
            <a class="btn btn-info" href="{{ route('cargoTagValue.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('cargoTagValue.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['cargoTagValue.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    

@endsection