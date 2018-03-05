<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['price'];

    public function items()
    {
    	return $this->belongsTo('App\Item');
    }
}
