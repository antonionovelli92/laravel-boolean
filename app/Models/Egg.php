<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egg extends Model
{
    use HasFactory;
    protected $fillable = ['color', 'name', 'contains', 'chocolate', 'size', 'description', 'thumb',];
}
