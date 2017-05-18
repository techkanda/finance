    <div class="form-group{{ $errors->has('area_id') ? ' has-error' : '' }}">
        <label for="area_id" class="col-md-4 control-label">Area Id</label>

        <div class="col-md-6">
            {!! Form::text('area_id', $area + 1, array('placeholder' => 'Area_Id','class' => 'form-control', 'required', 'readonly')) !!}
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
 <div class="form-group{{ $errors->has('area_pic') ? ' has-error' : '' }}">
        <label for="area_pic" class="col-md-4 control-label">Area Pic</label>

        <div class="col-md-6">
            {!! Form::file('area_pic', null, array('placeholder' => 'img','class' => 'form-control', 'required', 'autofocus')) !!}
            <!-- <input id="cus_name" type="text" class="form-control" name="cus_name" value="{{ old('cus_name') }}" required autofocus> -->
            @if ($errors->has('area_pic'))
                <span class="help-block">
                    <strong>{{ $errors->first('area_pic') }}</strong>
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