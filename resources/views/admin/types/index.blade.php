@extends('layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
@endsection

@section('content')
<div class="container-fluid">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="row">

 <a class="btn btn-info" href="{{ route('types.create') }}">Create</a>
</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                   <div class="row">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                               <th>Type ID</th>
                               <th>Type Name</th>
                                <th>Created at</th>
                                <th>Deleted at</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                               <th>Type ID</th>
                               <th>Type Name</th>
                                <th>Created at</th>
                                <th>Deleted at</th>                                
                                <th>Action</th>
                            </tr>
                        </tfoot>
                      
                        <tbody>@foreach ($types as $type)
                            <tr>
                                <td>{{ $type->mode_id }}</td>
                                <td>{{ $type->mode_name }}</td>                        
                               <td>{{ $type->created_at }}</td>
                                <td>{{ $type->deleted_at }}</td>    
                               <td>
                                    <a class="btn btn-info" href="{{ route('types.show',$type->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('types.edit',$type->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['types.destroy', $type->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                   </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );    
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
@endsection