<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable =  ['location', 'allowed_units'];

    protected $connection = 'mysql';
}
