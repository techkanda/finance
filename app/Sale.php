<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'deal_id', 'payment', 'payment_type', 'client_id',  'commission', 'principal_res', 'res_rep', 'quantity', 'principal_pay', 'full_pay',
    ];

    
}
