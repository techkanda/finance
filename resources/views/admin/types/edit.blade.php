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
                <div class="panel-heading">Mode Update Form</div>
                <div class="panel-body">

                    {!! Form::model($type, ['route' => ['types.update', $type->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('area_id') ? ' has-error' : '' }}">
        <label for="area_id" class="col-md-4 control-label">Mode ID</label>

        <div class="col-md-6">
            {!! Form::text('mode_id', null, array('placeholder' => 'ModeId','class' => 'form-control', 'required', 'readonly')) !!}
            <!-- <input id="cus_id" type="text" class="form-control" name="cus_id" value="{{ old('cus_id') }}" required autofocus> -->
            @if ($errors->has('area_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('mode_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('mode_name') ? ' has-error' : '' }}">
        <label for="mode_name" class="col-md-4 control-label">Mode Name</label>

        <div class="col-md-6">
            {!! Form::text('mode_name', null, array('placeholder' => 'Mode Name','class' => 'form-control', 'required', 'autofocus')) !!}
            <!-- <input id="cus_name" type="text" class="form-control" name="cus_name" value="{{ old('cus_name') }}" required autofocus> -->
            @if ($errors->has('mode_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('mode_name') }}</strong>
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