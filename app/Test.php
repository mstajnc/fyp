<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Test extends Eloquent  {

    protected $connection = 'mongodb';
     protected $collection = 'entries';

}
