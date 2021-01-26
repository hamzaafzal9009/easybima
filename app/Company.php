<?php

namespace App;

use App\CompanyFeature;
use App\Policy;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function policies()
    {
        return $this->belongsToMany(
            Policy::class, 'company_policies', 'company_id', 'policy_id', 'id'
        );
    }

    public function features()
    {
        return $this->hasMany(CompanyFeature::class, 'company_id', 'id');
    }

    public function users()
    {
        return $this->hasManyThrough(
            'App\UserSelectCompanyPolicy',
            'App\CompanyPolicy',
            'company_id',
            'company_policy_id',
            'id',
            'id'
        );
    }

}
