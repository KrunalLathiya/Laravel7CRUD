<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corona extends Model
{
    protected $fillable = ['country_name', 'symptoms', 'cases'];
}
