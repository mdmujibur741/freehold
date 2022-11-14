<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zipCode extends Model
{
    use HasFactory;
  
     protected $fillable = ['city_id','road_id','zipCode'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function road()
    {
         return $this->belongsTo(road::class);
    }
}
