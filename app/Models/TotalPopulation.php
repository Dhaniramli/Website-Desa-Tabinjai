<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalPopulation extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'man', 'woman', 'total'];
}