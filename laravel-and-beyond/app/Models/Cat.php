<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'zodiac', 'comment', 'file','created_at', 'updated_at'];
}
