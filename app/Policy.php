<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{

    protected $guarded = [];

    public function features()
    {
        return $this->hasMany('App\PFeature', 'policy_id', 'id');
    }

    public function companies()
    {
        return $this->belongsToMany(
            Company::class, 'company_policies', 'policy_id', 'company_id', 'id'
        );
    }

    public function users()
    {
        return $this->hasManyThrough(
            'App\UserSelectCompanyPolicy',
            'App\CompanyPolicy',
            'policy_id',
            'company_policy_id',
            'id',
            'id'
        );
    }

}
