<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function loadHeader(){
        return view('protofolio.index');
    }
    public function loadAdmin(){
        return view('admin.index');
    }
    public function addData(Request $request){
        request()->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',

        ]);

    }
}
