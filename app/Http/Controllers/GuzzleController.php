<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\View;

use Illuminate\Http\Request;

class GuzzleController extends Controller
{
    public function getRemoteData(){
    	return View::make('index');
    }
}
