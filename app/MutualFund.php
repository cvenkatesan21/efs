<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MutualFund extends Model
{
    //
    protected $fillable=[
        'customer_id',
        'company_name',
        'symbol',
        'purchase_date',
        'purchase_price',
        'current_price',
        'shares',

    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}

