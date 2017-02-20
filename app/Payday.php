<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payday extends Model
{
    protected $table = 'paydays';

    protected $guarded  = ['id'];
}
