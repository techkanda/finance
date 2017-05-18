<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
       'id', 'partner_id', 'partner_name', 'phone', 'address', 'area', 'proof_type', 'proof_id', 'proof_doc', 'guarantor_name', 'guarantor_address', 'Partner_Amount', 'created_by', 

    ];
}
