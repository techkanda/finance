    <div class="form-group{{ $errors->has('partner_id') ? ' has-error' : '' }}">
        <label for="partner_id" class="col-md-4 control-label">Partner Id</label>

        <div class="col-md-6">
            {!! Form::text('partner_id', $partner+1, array('placeholder' => 'Partner Id','class' => 'form-control', 'required', 'readonly')) !!}
            <!-- <input id="cus_id" type="text" class="form-control" name="cus_id" value="{{ old('cus_id') }}" required autofocus> -->
            @if ($errors->has('partner_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('partner_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('partner_name') ? ' has-error' : '' }}">
        <label for="partner_name" class="col-md-4 control-label">Partner Name</label>

        <div class="col-md-6">
            {!! Form::text('partner_name', null, array('placeholder' => 'Partner Name','class' => 'form-control', 'required', 'autofocus')) !!}
            <!-- <input id="cus_name" type="text" class="form-control" name="cus_name" value="{{ old('cus_name') }}" required autofocus> -->
            @if ($errors->has('partner_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('partner_name') }}</strong>
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

    <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
        <label for="area" class="col-md-4 control-label">Area</label>

        <div class="col-md-6">
            {!! Form::text('area', null, array('placeholder' => 'Area','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('area'))
                <span class="help-block">
                    <strong>{{ $errors->first('area') }}</strong>
                </span>
            @endif
        </div>
    </div>

    
     <div class="form-group{{ $errors->has('proof_type') ? ' has-error' : '' }}">
        <label for="proof_type" class="col-md-4 control-label">proof</label>

        <div class="col-md-6">
            {!! Form::text('proof_type', null, array('placeholder' => 'proof','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('proof_type'))
                <span class="help-block">
                    <strong>{{ $errors->first('proof_type') }}</strong>
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
      <div class="form-group{{ $errors->has('Partner_Amount') ? ' has-error' : '' }}">
        <label for="Partner_Amount" class="col-md-4 control-label">Guarantor Name</label>

        <div class="col-md-6">
            {!! Form::text('Partner_Amount', null, array('placeholder' => 'Partner Amount','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('Partner_Amount'))
                <span class="help-block">
                    <strong>{{ $errors->first('Partner_Amount') }}</strong>
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