<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demoProduct extends Model
{
    use HasFactory;
    protected $table = 'demo_products';
    protected $fillable = ['demoProductname'];
}
