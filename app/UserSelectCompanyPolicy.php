<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSelectCompanyPolicy extends Model
{
    
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function companies()
    {
        return $this->hasManyThrough('App\Company', 'App\CompanyPolicy', 'company_id', 'id', 'id');
    }

    public function policies()
    {
        return $this->hasManyThrough('App\Policy', 'App\CompanyPolicy', 'policy_id', 'id', 'id');
    }
}
