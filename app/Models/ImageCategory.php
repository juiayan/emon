<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GalleryImage;

class ImageCategory extends Model
{
    use HasFactory;
    protected $table = 'image_categories';
    protected $fillable = ['image_category','status'];

    public function imagecat()
    {
        return $this->belongsTo(GalleryImage::class, 'image_category_id','id');
    }
}
