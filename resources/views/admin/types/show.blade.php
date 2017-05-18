@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('types.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Types</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Mode ID:</strong>
                                {{ $type->mode_id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Mode Name:</strong>
                                {{ $type->mode_name }}
                            </div>
                        </div>
                       
                        </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Created By:</strong>
                                {{ $type->created_by }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Created at:</strong>
                                {{ $type->created_at->diffForHumans()  }}
                            </div>
                        </div>                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Updated at:</strong>
                                {{ $type->updated_at->diffForHumans() }}
                            </div>
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection