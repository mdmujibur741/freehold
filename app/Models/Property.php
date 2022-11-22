<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\ReturnTypePass;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'price', 'description', 'imageOne', 'imageTwo', 'city_id', 'bed_id', 'shower_id', 'road_id','status_id', 'zipCode_id', 'agent_id', 'views' ];


    // City Relation
    public function city()
    {
           return $this->belongsTo(City::class, 'city_id');
    }


    // Bed Relation
    public function bed()
    {
         return $this->belongsTo(bed::class,'bed_id');
    }

    // Shower Relation
    public function shower()
    {
         return $this->belongsTo(shower::class,'shower_id');
    }

    // Road Relation
    public function road()
    {
        return $this->belongsTo(road::class,'road_id');
    }

    //  Zip Code Relation 
    public function zipCode()
    {
         return $this->belongsTo(zipCode::class,'zipCode_id');
    }

    // Agent Relation 

    public function agent()
    {
         return $this->belongsTo(Agent::class, 'agent_id');
    }

    //status Relation
    
    public function status()
    {
        return $this->belongsTo(status::class,'status_id');
    }
}
