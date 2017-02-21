<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinfo extends Model
{
    protected $table = 'person_infos';

    protected $guarded  = ['id'];

    public function company_basicinfos()
    {
        return $this->belongsTo('App\CompanyBasicinfo');
    }

    public function payinfos()
    {
        return $this->hasOne('App\Payinfo');
    }

}
