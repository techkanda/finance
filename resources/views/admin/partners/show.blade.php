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
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Customers</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Partner Id:</strong>
                                {{ $partner->partner_id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>PartnerName:</strong>
                                {{ $partner->partner_name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Adress:</strong>
                                {{ $partner->address }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Area:</strong>
                                {{ $partner->area }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Proof:</strong>
                                {{ $partner->proof_type }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ProofID:</strong>
                                {{ $partner->proof_id }}
                            </div>
                        </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Proof Doc:</strong>
                                <img src="{{ $partner->proof_doc }}">
                               
                            </div>
                        </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Guarantor Name:</strong>
                                {{ $partner->guarantor_name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Guarantor Address:</strong>
                                {{ $partner->guarantor_address }}
                            </divpartner                        </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Created By:</strong>
                                {{ $partner->created_by }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Created at:</strong>
                                {{ $partner->created_at->diffForHumans()  }}
                            </div>
                        </div>                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Updated at:</strong>
                                {{ $partner->updated_at->diffForHumans() }}
                            </div>
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection