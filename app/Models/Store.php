<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status', 'image', 'slug','recently_update','affilite_link','category_id'];

    protected $table="stores";
    protected $primarykey="id";
    public function products()
    {
        return $this->hasmany('App\Models\Store', 'store_id');
    }
}
