<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    protected $fillable = ["name","zodiac_sign", "comment", "file_path", "created_at", "updated_at"];
}
