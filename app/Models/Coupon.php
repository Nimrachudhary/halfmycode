<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = ['store_id','catgory_id','coupon_title','coupon_code', 'Affilate_Link', 'slug','top_voucher', 'description', 'Cupon_type','status','image','deal_week','expiry_date'];

    public function store()
    {
        return $this->hasOne(Store::class, 'id', 'store_id');
    }
    public function getCreatedAtAttribute($value)
    {
         return Carbon::parse($value)->format('d-m-y H:i:s');
    }
}
