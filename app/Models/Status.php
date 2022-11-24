<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [ 'status', 'slug'];


    public function property()
    {
        return $this->hasOne(Property::class,'status_id');
    }
}
