<?php
namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table = "contact";
    protected $primaryKey = "id"; // Correct the property name
    protected $fillable = ['name', 'email', 'number', 'message'];
}
