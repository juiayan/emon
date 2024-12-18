<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImageCategory;


class GalleryImage extends Model
{
    use HasFactory;
    protected $table = 'gallery_images';
    protected $fillable = ['image_category_id','image_name','image_title','status'];

    public function imgae()
    {
        return $this->hasMany(ImageCategory::class, 'image_category_id', 'id');
    }
}
