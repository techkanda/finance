@extends('layouts.app')
@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                   <div class="row">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>User Name</th>
                                <th>DOB</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>User Name</th>
                                <th>DOB</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>@foreach ($users as $user)
                            <tr>
                                <td>{{ $user->fname }}</td>
                                <td>{{ $user->lname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ date('m-d-Y', strtotime($user->dob)) }}</td>
                                <td>
                                    <a class="btn btn-xs btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                    <a class="btn btn-xs btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

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