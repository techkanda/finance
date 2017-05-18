    <div class="form-group{{ $errors->has('cus_id') ? ' has-error' : '' }}">
        <label for="cus_id" class="col-md-4 control-label">Customer Id</label>

        <div class="col-md-6">
            {!! Form::text('cus_id', $customer+1, array('placeholder' => 'Customer_Id','class' => 'form-control', 'required', 'readonly')) !!}
            <!-- <input id="cus_id" type="text" class="form-control" name="cus_id" value="{{ old('cus_id') }}" required autofocus> -->
            @if ($errors->has('cus_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('cus_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('cus_name') ? ' has-error' : '' }}">
        <label for="cus_name" class="col-md-4 control-label">Customer Name</label>

        <div class="col-md-6">
            {!! Form::text('cus_name', null, array('placeholder' => 'Customer Name','class' => 'form-control', 'required', 'autofocus')) !!}
            <!-- <input id="cus_name" type="text" class="form-control" name="cus_name" value="{{ old('cus_name') }}" required autofocus> -->
            @if ($errors->has('cus_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('cus_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        <label for="Phone" class="col-md-4 control-label">Phone No</label>

        <div class="col-md-6">
            {!! Form::text('phone', null, array('placeholder' => 'Phone No','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('lname'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>

 

    <div class="form-group{{ $errors->has('area_id') ? ' has-error' : '' }}">
        <label for="area_id" class="col-md-4 control-label">Area</label>

        <div class="col-md-6">
            {!! Form::text('area_id', null, array('placeholder' => 'Area','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('area_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('area_id') }}</strong>
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
     <div class="form-group{{ $errors->has('proof') ? ' has-error' : '' }}">
        <label for="proof" class="col-md-4 control-label">proof</label>

        <div class="col-md-6">
            {!! Form::text('proof', null, array('placeholder' => 'proof','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('proof'))
                <span class="help-block">
                    <strong>{{ $errors->first('proof') }}</strong>
                </span>
            @endif
        </div>
    </div>
     <div class="form-group{{ $errors->has('proof_id') ? ' has-error' : '' }}">
        <label for="proof_id" class="col-md-4 control-label">proof Id</label>

        <div class="col-md-6">
            {!! Form::text('proof_id', null, array('placeholder' => 'proof Id','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('proof_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('proof_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
     <div class="form-group{{ $errors->has('proof_doc') ? ' has-error' : '' }}">
        <label for="proof_doc" class="col-md-4 control-label">Proof DOC</label>

        <div class="col-md-6">
            {!! Form::file('proof_doc', null, array('placeholder' => 'proof_doc','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('proof_doc'))
                <span class="help-block">
                    <strong>{{ $errors->first('proof_doc') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('guarantor_name') ? ' has-error' : '' }}">
        <label for="guarantor_name" class="col-md-4 control-label">Guarantor Name</label>

        <div class="col-md-6">
            {!! Form::text('guarantor_name', null, array('placeholder' => 'GuarantorName','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('guarantor_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('guarantor_name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('guarantor_address') ? ' has-error' : '' }}">
        <label for="guarantor_name" class="col-md-4 control-label">Guarantor Address</label>

        <div class="col-md-6">
            {!! Form::text('guarantor_address', null, array('placeholder' => 'Guarantor Address','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('guarantor_address'))
                <span class="help-block">
                    <strong>{{ $errors->first('guarantor_address') }}</strong>
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