<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Asset extends Moloquent
{
	protected $fillable =  ['asset', 'location'];

    protected $connection = 'mongodb';
    protected $collection = 'assets';

}
