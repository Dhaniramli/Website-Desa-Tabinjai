<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hamlet;

class HamletOffice extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function halmet(){
        return $this->belongsTo(Halmet::class, 'halmet_id');
    }
}
