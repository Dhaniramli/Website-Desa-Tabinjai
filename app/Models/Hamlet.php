<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HamletOffice;

class Hamlet extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function halmetOffice(){
        return $this->hasMany(halmetOffice::class);
    }
    public function halmetOffices()
    {
        return $this->hasMany(HalmetOffice::class, 'halmet_id');
    }
}
