<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['city','slug'];


    public function property()
    {
         return $this->hasOne(Property::class, 'city_id');
    }
}
