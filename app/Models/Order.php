<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
       'user_id',
       'total_price',
       'name',
       'email',
       'phone',
       'address1',
       'address2',
       'city',
       'state',
       'country',
       'zipcode',
       'payment_id',
       'payment_mode',
       'order_status',
       'payment_status',
       'message',
       'tracking_no',
     ];
}
