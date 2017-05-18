<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
     protected $fillable = [
       'id', 'area_id', 'area_name', 'area_pic', 'area_district', 'area_state', 'created_by',

    ];
}
