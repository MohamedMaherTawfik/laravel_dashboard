<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function loadHeader(){
        $all_header= Header::all();
        return view('protofolio.index',compact('all_header'));
    }
}
