@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Area Update Form</div>
                <div class="panel-body">

                    {!! Form::model($area, ['route' => ['areas.update', $area->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('area_id') ? ' has-error' : '' }}">
        <label for="area_id" class="col-md-4 control-label">Area Id</label>

        <div class="col-md-6">
            {!! Form::text('area_id', null, array('placeholder' => 'Areaid','class' => 'form-control', 'required', 'readonly')) !!}
            <!-- <input id="cus_id" type="text" class="form-control" name="cus_id" value="{{ old('cus_id') }}" required autofocus> -->
            @if ($errors->has('area_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('area_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('area_name') ? ' has-error' : '' }}">
        <label for="area_name" class="col-md-4 control-label">Area Name</label>

        <div class="col-md-6">
            {!! Form::text('area_name', null, array('placeholder' => 'Area Name','class' => 'form-control', 'required', 'autofocus')) !!}
            <!-- <input id="cus_name" type="text" class="form-control" name="cus_name" value="{{ old('cus_name') }}" required autofocus> -->
            @if ($errors->has('area_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('area_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

   
 

   <div class="form-group{{ $errors->has('area_district') ? ' has-error' : '' }}">
        <label for="area_district" class="col-md-4 control-label">Area District</label>

        <div class="col-md-6">
            {!! Form::text('area_district', null, array('placeholder' => 'Area District','class' => 'form-control', 'required', 'autofocus')) !!}
            <!-- <input id="cus_name" type="text" class="form-control" name="cus_name" value="{{ old('cus_name') }}" required autofocus> -->
            @if ($errors->has('area_district'))
                <span class="help-block">
                    <strong>{{ $errors->first('area_district') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('area_statearea_state') ? ' has-error' : '' }}">
        <label for="area_state" class="col-md-4 control-label">Area State</label>

        <div class="col-md-6">
            {!! Form::text('area_state', null, array('placeholder' => 'Area State','class' => 'form-control', 'required', 'autofocus')) !!}
            <!-- <input id="cus_name" type="text" class="form-control" name="cus_name" value="{{ old('cus_name') }}" required autofocus> -->
            @if ($errors->has('area_state'))
                <span class="help-block">
                    <strong>{{ $errors->first('area_state') }}</strong>
                </span>
            @endif
        </div>
    </div>
       
    
    

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection