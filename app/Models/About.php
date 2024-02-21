<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $primaryKey = 'id';
    protected $fillable = ['position', 'profile', 'description', 'phone', 'email' , 'website'];
    use HasFactory;
}
