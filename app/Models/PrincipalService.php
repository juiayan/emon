<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrincipalService extends Model
{
    use HasFactory;
    protected $table = 'principalservice';
    protected $fillable = ['principal_name', 'typeof_service'];
}
