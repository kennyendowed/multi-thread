<?php

namespace App\Models;
use App\Models\countries;

use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    protected $fillable = [
        'id','country_id','name'
    ];

    public function Country()
  {
    return $this->belongsTo(countries::class,'country_id','id');
  }
}
