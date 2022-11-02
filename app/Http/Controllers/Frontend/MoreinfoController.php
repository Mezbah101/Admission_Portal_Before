<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoreinfoController extends Controller
{
    public function moreinfo(){
        return view('moreinfo');
   }
}
