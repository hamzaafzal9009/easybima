<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PFeature extends Model
{
    protected $guarded = [];
    public function policies()
    {
        return $this->belongsTo('App\Policy', 'policy_id', 'id');
    }
}
