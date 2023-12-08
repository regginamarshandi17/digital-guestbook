<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Save extends Controller
{
    public function save(Request $request){
        return view('read');
    }
}
