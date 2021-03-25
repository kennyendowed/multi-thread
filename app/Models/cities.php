<?php

namespace App\Models;
use App\Models\states;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    protected $fillable = [
        'id','state_id','name'
    ];

    public function states()
    {
      return $this->belongsTo(states::class,'state_id','id');
    }
}
