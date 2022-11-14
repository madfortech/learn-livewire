<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demoCity extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'demoname',
        'democounty',
        'latitude',
        'longitude'
    ];

    public function state()
    {
        return $this->belongsTo(demoState::class);
    }

}
