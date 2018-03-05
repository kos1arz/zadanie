<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title','description','price'];

    public function prices()
    {
    	return $this->hasMany('App\Price');
    }
}
