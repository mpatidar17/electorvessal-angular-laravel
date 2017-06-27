@extends('layouts.app')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Subscription</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('subscription.create') }}"> Create New</a>
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
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($subscriptions as $key => $item)
    <tr>
        <td>{{ ($key+1) }}</td>
        <td>{{ $item->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('subscription.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('subscription.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['subscription.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    <?php echo $subscriptions->links(); ?>

@endsection