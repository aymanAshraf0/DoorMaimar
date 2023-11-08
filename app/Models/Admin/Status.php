<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public function real_estate2s(){
    
        return $this->hasMany(RealEstate2::class, 'status_id');
    
    }
}
