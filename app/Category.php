<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Orchid\Screen\AsSource;

class Category extends Model
{

    use AsSource;
    protected $fillable = [
        'name',
        'slug'
    ];

    public function products() {
        return $this->belongsToMany('App\Product');
    }
}
