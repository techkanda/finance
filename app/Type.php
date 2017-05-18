<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
     protected $fillable = [
        'mode_id', 'mode_name', 'created_by', 

    ];
}
