<?php

namespace App\Models;
use App\Models\states;

use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    protected $fillable = [
        'id','sortname','name','phonecode'
    ];

//     public function getstate()
//  {
//        return $this->hasMany('App\Models\City');
//      return $this->hasMany( states::class,'id','country_id');
//  }



}
