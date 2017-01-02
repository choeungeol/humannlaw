<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyBasicinfo extends Model
{
    protected $table = 'company_basicinfos';

    protected $guarded  = ['id'];

    public function person_infos()
    {
        return $this->hasMany('App\Pinfo');
    }


}
