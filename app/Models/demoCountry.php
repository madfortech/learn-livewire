<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demoCountry extends Model
{
    use HasFactory;
    protected $fillable = [
        'demoname',
        'short_code',
    ];
}
