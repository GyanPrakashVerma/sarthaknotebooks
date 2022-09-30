<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'p_mainimg','cate_id','p_name','p_price','description','discount','pqty','m_price',
    ];
    public function wishlist(){
        return $this->hasMany(Wishlist::class);
     }
}
