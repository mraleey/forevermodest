<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $table = 'collections'; // explicitly set table name

    protected $fillable = [
        'name',
        'description',
        'price',
        'gender',
        'image',
    ];
}
