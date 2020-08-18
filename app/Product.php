<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use App\Orchid\Presenters\ProductPresenter;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use AsSource;

    protected $fillable = [
        'name', 
        'slug',
        'details',
        'description',
        'image',
        'images',
        'images1',
        'price'
    ];

    public function categories() {
        return $this->belongsToMany('App\Category');
    }

}
