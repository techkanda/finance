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

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">User Name</label>

                            <div class="col-md-6">
            {!! Form::text('username', null, array('placeholder' => 'User Name','class' => 'form-control', 'required', 'autofocus')) !!}

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control', 'required', 'autofocus')) !!}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
            {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control', 'required', 'autofocus')) !!}                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">

                                {!! Form::textarea('address', null, array('placeholder' => 'Address','class' => 'form-control', 'required', 'autofocus', 'rows' => '4')) !!}

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