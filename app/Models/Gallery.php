<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'eventdetails';
    protected $fillable  = [
        
        'event_id',
        'event_image'


    ];

      public function gallery()
    {
        return $this->belongsTo('App\Event');
    }
}
