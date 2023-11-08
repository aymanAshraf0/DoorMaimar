<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Real_estate extends Model
{
    use HasFactory;

    public function real_estate2s(){

        return $this->hasMany(RealEstate2::class,'Real_estate_id');

    }
}
