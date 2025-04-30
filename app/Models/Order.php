<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'email', 'country', 'state',
        'address', 'city', 'zip', 'create_account', 'password',
        'ship_to_different_address', 'order_note', 'total_price', 'payment_method'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    
}
