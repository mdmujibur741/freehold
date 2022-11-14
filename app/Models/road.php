<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class road extends Model
{
    use HasFactory;

    protected $fillable = ['road', 'city_id'];


    public function city()
    {
          return $this->belongsTo(City::class);
    }

    public function zipCode()
    {
        return $this->hasOne(zipCode::class);
    }
}
