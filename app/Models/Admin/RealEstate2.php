<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstate2 extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $casts=[
        'images_2'=>'array'
    ];

public function cities()
{
    return $this->belongsTo(City::class,'city_id');
}

public function status()
{
    return $this->belongsTo(Status::class,'status_id');
}

public function Real_estate()
{
    return $this->belongsTo(Real_estate::class,'Real_estate_id');
}
}
