<?php

namespace App;

# use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongolidLaravel\MongolidModel as Eloquent;
class Magnet extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'magnets';
}
