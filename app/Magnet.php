<?php

namespace App;

use Moloquent\Eloquent\Model as Eloquent;

class Magnet extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'magnets';
}
