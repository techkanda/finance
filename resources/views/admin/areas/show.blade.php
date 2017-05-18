@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('areas.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Areas</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Area Id:</strong>
                                {{ $area->area_id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>AreaName:</strong>
                                {{ $area->area_name }}
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Area Pic:</strong>
                                {{ $area->area_pic }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>District:</strong>
                                {{ $area->area_district }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>State:</strong>
                                {{ $area->area_state }}
                            </div>
                        </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Created By:</strong>
                                {{ $area->created_by }}
                            </div>
                        </div>
                          
                          

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Created at:</strong>
                                {{ $area->created_at->diffForHumans()  }}
                            </div>
                        </div>                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Updated at:</strong>
                                {{ $area->updated_at->diffForHumans() }}
                            </div>
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection