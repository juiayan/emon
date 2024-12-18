<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    use HasFactory;
    protected $table = 'fleet';
    protected $fillable = ['vessel_name', 'vessel_type', 'flag', 'service'];
}
