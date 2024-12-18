<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvFormat extends Model
{
    use HasFactory;
    protected $table = 'cv_format';
    protected $fillable = ['cv_file'];
}
