<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Blog extends Model
{
    use AsSource;

    protected $fillable = ['title', 'body', 'cover_image'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
