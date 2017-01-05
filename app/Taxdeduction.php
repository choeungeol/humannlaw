<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxDeduction extends Model
{
    protected $table = 'tax_deductions';

    protected $guarded  = ['id'];
}
