<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Test extends Moloquent  {

    protected $connection = 'mongodb';
    protected $collection = 'test';

}
