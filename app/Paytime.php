<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paytime extends Model
{
    protected $table = 'paytimes';

    protected $guarded  = ['id'];
}
