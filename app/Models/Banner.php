<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'id';
    // protected $fillable = ['welcomeimages','resume', 'name', 'dev'];
    protected $fillable = ['resume', 'name', 'dev'];
    use HasFactory;
}
