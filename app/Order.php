<?php

namespace App;
use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use AsSource;

    protected $fillable = ['user_id', 'billing_first_name', 'billing_last_name','billing_email', 'billing_address',
        'billing_city', 'billing_town', 'billing_postalcode', 'billing_phone', 'billing_total', 'error'
    ];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }

    public function product() 
    {
        $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
