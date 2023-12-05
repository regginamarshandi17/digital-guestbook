<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Read extends Controller
{
    public function read(){
        return view('read');
}
}