<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projetos extends Model
{
    protected $fillable = ["nome", "hash"];
    use HasFactory;
}
