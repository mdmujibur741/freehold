<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
      return [
               'id' => $this->id,
               'city' => new CityResource($this->whenLoaded('city')),
               'road' => $this->road,    
      ];
      
        // return parent::toArray($request);
    }
}
