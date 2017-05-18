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

 <a class="btn btn-info" href="{{ route('areas.create') }}">Create</a>
</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                   <div class="row">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                               <th>Area ID</th>
                               <th>Area Name</th>
                               <th>Area Pic</th>
                               <th>Area District</th>
                               <th>Area State</th>
                                <th>Created at</th>
                                <th>Deleted at</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                               <th>Area ID</th>
                               <th>Area Name</th>
                               <th>Area Pic</th>
                               <th>Area District</th>
                               <th>Area State</th>
                                <th>Created at</th>
                                <th>Deleted at</th>                                
                                <th>Action</th>
                            </tr>
                        </tfoot>
                      
                        <tbody>@foreach ($areas as $area)
                            <tr>
                                <td>{{ $area->area_id }}</td>
                                <td>{{ $area->area_name }}</td>
                                <td>{{ $area->area_pic }}</td>
                                <td>{{ $area->area_district }}</td>
                                <td>{{ $area->area_state }}</td>
                                <td>{{ $area->created_at }}</td>
                                <td>{{ $area->deleted_at }}</td>    
                               <td>
                                    <a class="btn btn-info" href="{{ route('areas.show',$area->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('areas.edit',$area->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['areas.destroy', $area->id],'style'=>'display:inline']) !!}
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