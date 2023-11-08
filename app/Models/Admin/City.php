<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'citiess';

    public function real_estate2s ()
{
    return $this->hasMany(RealEstate2::class, 'city_id');
}
}
