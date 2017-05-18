    <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
        <label for="fname" class="col-md-4 control-label">First Name</label>

        <div class="col-md-6">
            {!! Form::text('fname', null, array('placeholder' => 'First Name','class' => 'form-control', 'required', 'autofocus')) !!}
            <!-- <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus> -->
            @if ($errors->has('fname'))
                <span class="help-block">
                    <strong>{{ $errors->first('fname') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
        <label for="lname" class="col-md-4 control-label">Last Name</label>

        <div class="col-md-6">
            {!! Form::text('lname', null, array('placeholder' => 'Last Name','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('lname'))
                <span class="help-block">
                    <strong>{{ $errors->first('lname') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <div class="col-md-6">
            {!! Form::text('email', null, array('placeholder' => 'E-Mail','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        <label for="phone" class="col-md-4 control-label">Phone</label>

        <div class="col-md-6">
            {!! Form::text('phone', null, array('placeholder' => 'Phone Number','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
        <label for="address" class="col-md-4 control-label">Address</label>

        <div class="col-md-6">

        {!! Form::textarea('address', null, array('placeholder' => 'Address','class' => 'form-control', 'required', 'autofocus', 'rows' => '4')) !!}

            <!-- <textarea id="address" class="form-control" name="address" value="{{ old('address') }}" required autofocus rows="3"></textarea> -->

            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
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