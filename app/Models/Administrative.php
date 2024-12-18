<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrative extends Model
{
    use HasFactory;
    protected $table = 'admin_members';
    protected $fillable = ['name', 'designation', 'qualification',  'position', 'profile', 'profile_image'];
}
