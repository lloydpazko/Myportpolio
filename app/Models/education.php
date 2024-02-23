<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $table = 'education';
    protected $primaryKey = 'id';
    protected $fillable = ['year', 'course', 'school', 'address', 'description'];
    use HasFactory;
}
