<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = [
        'session_id',
        'product_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(\App\Models\Collection::class, 'product_id');
    }
}
