<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Asset extends Moloquent
{
	protected $fillable =  ['asset', 'location_id', 'contact_id'];

    protected $connection = 'mongodb';
    protected $collection = 'assets';

    public function nullIfBlank($contact_id)
    {
        return trim($contact_id) !== '' ? $contact_id : null;
    }

}
