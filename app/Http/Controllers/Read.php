<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Guestbook;
use Illuminate\Http\Request;

class Read extends Controller
{
    public function read()
    {
        // Mengambil data guestbook dengan paginate
        $guests = Guestbook::all();

        // Mengirim data guestbook ke view
        return view('read', ['guests' => $guests]);
    }
    
}