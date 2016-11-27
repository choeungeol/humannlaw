<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calctable extends Model
{
    protected $table = 'calc_table';

    protected $guarded  = ['id'];
}
