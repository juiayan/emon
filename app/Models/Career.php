<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = 'cv_upload';
    protected $fillable = ['full_name', 'rank', 'phone', 'whatsapp_phone', 'man_dob', 'age', 'email_address', 'experience', 'last_sign_of', 'cv_file'];
}
