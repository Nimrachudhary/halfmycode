<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialEvent extends Model
{
    use HasFactory;
    protected $fillable = ['name','title', 'description', 'status', 'image', 'slug','is_featured'];

}
