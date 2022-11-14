<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demoCompany extends Model
{
    use HasFactory;
    protected $fillable = ['demoname', 'city_id'];

    public function city()
    {
        return $this->belongsTo(demoCity::class);
    }
}
