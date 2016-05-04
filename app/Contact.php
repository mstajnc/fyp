<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $connection = 'mysql';
    protected $fillable =  ['name', 'surname', 'email', 'phone'];

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
