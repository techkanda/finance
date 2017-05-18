    <div class="form-group{{ $errors->has('deal_id') ? ' has-error' : '' }}">
        <label for="deal_id" class="col-md-4 control-label">Deal ID</label>

        <div class="col-md-6">
            {!! Form::text('deal_id', $deal_id+1, array('placeholder' => 'Deal ID','class' => 'form-control', 'required', 'readonly')) !!}
            <!-- <input id="deal_id" type="text" class="form-control" name="deal_id" value="{{ old('deal_id') }}" required autofocus> -->
            @if ($errors->has('deal_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('deal_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('payment') ? ' has-error' : '' }}">
        <label for="payment" class="col-md-4 control-label">Payment</label>

        <div class="col-md-6">
            {!! Form::text('payment', null, array('placeholder' => 'Payment','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('payment'))
                <span class="help-block">
                    <strong>{{ $errors->first('payment') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('payment_type') ? ' has-error' : '' }}">
        <label for="payment_type" class="col-md-4 control-label">Payment Type</label>

        <div class="col-md-6">
            {!! Form::text('payment_type', null, array('placeholder' => 'Payment Type','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('payment_type'))
                <span class="help-block">
                    <strong>{{ $errors->first('payment_type') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('commission') ? ' has-error' : '' }}">
        <label for="commission" class="col-md-4 control-label">Commission</label>

        <div class="col-md-6">
            {!! Form::text('commission', null, array('placeholder' => 'Commission','class' => 'form-control', 'required', 'autofocus')) !!}

            @if ($errors->has('commission'))
                <span class="help-block">
                    <strong>{{ $errors->first('commission') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('principal_res') ? ' has-error' : '' }}">
        <label for="principal_res" class="col-md-4 control-label">Principal Residuals</label>

        <div class="col-md-6">

        {!! Form::text('principal_res', null, array('placeholder' => 'Principal Residuals','class' => 'form-control', 'required', 'autofocus')) !!}

            <!-- <textarea id="principal_res" class="form-control" name="principal_res" value="{{ old('principal_res') }}" required autofocus rows="3"></textarea> -->

            @if ($errors->has('principal_res'))
                <span class="help-block">
                    <strong>{{ $errors->first('principal_res') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('res_rep') ? ' has-error' : '' }}">
        <label for="res_rep" class="col-md-4 control-label">Residuals Rep</label>

        <div class="col-md-6">

        {!! Form::text('res_rep', null, array('placeholder' => 'Residuals Rep','class' => 'form-control', 'required', 'autofocus')) !!}

            <!-- <textarea id="res_rep" class="form-control" name="res_rep" value="{{ old('res_rep') }}" required autofocus rows="3"></textarea> -->

            @if ($errors->has('res_rep'))
                <span class="help-block">
                    <strong>{{ $errors->first('res_rep') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
        <label for="quantity" class="col-md-4 control-label">Quantity</label>

        <div class="col-md-6">

        {!! Form::text('quantity', null, array('placeholder' => 'Quantity','class' => 'form-control', 'required', 'autofocus')) !!}

            <!-- <textarea id="quantity" class="form-control" name="quantity" value="{{ old('quantity') }}" required autofocus rows="3"></textarea> -->

            @if ($errors->has('quantity'))
                <span class="help-block">
                    <strong>{{ $errors->first('quantity') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>