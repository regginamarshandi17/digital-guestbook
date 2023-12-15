<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model
{
    use HasFactory;
    protected $table = 'guestbook';
    protected $fillable = ['nama', 'alamat', 'email', 'no_telepon'];
}
