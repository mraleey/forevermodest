<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQModel extends Model
{
    use HasFactory;

    protected $table = 'faqs'; // Ensure this matches your database table name
    protected $fillable = ['category', 'question', 'answer'];
}
