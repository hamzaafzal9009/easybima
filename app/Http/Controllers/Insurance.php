<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Insurance extends Controller
{
    public function adultHealthInsurance()
    {
      return view('insurances.adult-health-insurance');
    }
}
