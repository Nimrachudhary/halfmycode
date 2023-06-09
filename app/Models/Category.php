<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','title', 'description', 'status', 'image', 'slug','is_featured','logo'];

    public function stores()
    {
        return $this->hasMany(Store::class, 'category_id', 'id');
    }


}
