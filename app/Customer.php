<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $fillable = [
        'id', 'cus_id', 'cus_name', 'phone', 'address', 'area_id', 'proof', 'proof_id', 'proof_doc', 'guarantor_name', 'guarantor_address', 'created_by',

    ];
}
