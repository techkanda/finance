    <div class="form-group{{ $errors->has('mode_id') ? ' has-error' : '' }}">
        <label for="mode_id" class="col-md-4 control-label">Mode Id</label>

        <div class="col-md-6">
            {!! Form::text('mode_id', $type+1, array('placeholder' => 'Mode_Id','class' => 'form-control', 'required', 'readonly')) !!}
            <!-- <input id="cus_id" type="text" class="form-control" name="cus_id" value="{{ old('cus_id') }}" required autofocus> -->
            @if ($errors->has('mode_id'))
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