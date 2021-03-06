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

 <a class="btn btn-info" href="{{ route('partners.create') }}">Create</a>
</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                   <div class="row">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Partner Id</th>id
                                <th>ParnerName</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Area</th>
                                <th>Proof</th>
                                <th>Proof ID</th>
                                <th>Proof Doc</th>
                                <th>Guarantor Name</th>
                                <th>Guarantor Adress</th>
                                 <th>Created By</th>
                                <th>Created at</th>
                                <th>Deleted at</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                 <th>Partner Id</th>id
                                <th>ParnerName</th>
                                 <th>Phone</th>
                                <th>Address</th>
                                <th>Area</th>
                                <th>Proof</th>
                                <th>Proof ID</th>
                                <th>Proof Doc</th>
                                <th>Guarantor Name</th>
                                <th>Guarantor Adress</th>
                                 <th>Created By</th>
                                <th>Created at</th>
                                <th>Deleted at</th>                                
                                <th>Action</th>
                            </tr>
                        </tfoot>
                      
                        <tbody>@foreach ($partners as $partner)
                            <tr>
                                <td>{{ $partner->partner_id }}</td>
                                <td>{{ $partner->partner_name }}</td>
                                <td>{{ $partner->phone }}</td>
                                <td>{{ $partner->address }}</td>
                                <td>{{ $partner->area }}</td>
                                <td>{{ $partner->proof_type }}</td>
                                <td>{{ $partner->proof_id }}</td>
                                <td>{{ $partner->proof_doc }}</td>
                                <td>{{ $partner->guarantor_name }}</td>    
                                <td>{{ $partner->guarantor_address }}</td>
                                <td>{{ $partner->created_by }}</td>
                                <td>{{ $partner->created_at }}</td>
                                <td>{{ $partner->deleted_at }}</td>    
                               <td>
                                    <a class="btn btn-info" href="{{ route('partners.show',$partner->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('partners.edit',$partner->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['partners.destroy', $partner->id],'style'=>'display:inline']) !!}
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