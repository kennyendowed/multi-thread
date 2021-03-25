<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    protected $fillable = [
        'id','descriptions','name','assets_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class,'groud_id','id');
    }
}
