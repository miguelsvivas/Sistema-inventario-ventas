<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
     
    protected $fillable = [
    'provider_id','user_id','purchase_date','tax',
    'total','status','invoice'
    ];
}
