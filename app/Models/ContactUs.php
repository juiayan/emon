<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table = 'contactus';
    protected $fillable = ['address', 'phone_one', 'phone_two', 'phone_three', 'phone_four', 'email_one', 'email_two', 'email_three', 'email_four', 'location_id', 'description'];
}
