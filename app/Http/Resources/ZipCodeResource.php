<?php

namespace App\Http\Resources;

use App\Models\City;
use Illuminate\Http\Resources\Json\JsonResource;

class ZipCodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
         return[
                 'id' => $this->id,
                 'city' => new CityResource($this->whenLoaded('city')),
                 'road' => new RoadResource($this->whenLoaded('road')),
                 'zipCode' => $this->zipCode,
         ];
        // return parent::toArray($request);
    }
}
