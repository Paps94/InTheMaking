<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormValidation;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function show()
    {
      return view('issues');
    }
}
