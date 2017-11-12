<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Books extends Eloquent
{
    protected $connection = 'mongodb';
}
