<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyFeature extends Model
{
    
    protected $guarded = [];
    public function companies()
    {
        return $this->belongsTo('App\Company', 'company_id', 'id');
    }

    public function features()
    {
        return $this->belongsTo('App\PFeature', 'feature_id', 'id');
    }

}
