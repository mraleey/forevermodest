<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignupModel extends Model
{
    use HasFactory;
    protected $table = "signup";
    protected $primaryKey = "id"; // Correct the property name
    protected $fillable = ['username',  'email', 'password', 'confirmpassword']; // Add fillable fields
}
