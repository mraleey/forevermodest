<?php
namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;
    protected $table = "login";
    protected $primaryKey = "id"; // Correct the property name
    protected $fillable = [ 'email', 'password', 'rememberme']; // Add fillable fields
}

