<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
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
                'name' => $this->name,
                'slug' => $this->slug,
                'price' => $this->price,
                'description' => $this->description,
                'imageOne' => asset('/storage/'. $this->image),
                'imageTwo' => asset('/storage/'. $this->image),
                'views' => $this->views,
                'city' => new CityResource($this->whenLoaded('city')),
                'bed' => new BedResource($this->whenLoaded('bed')),
                'shower' => new ShowerResource($this->whenLoaded('shower')),
                'road' => new RoadResource($this->whenLoaded('road')),
                'zipCode' => new ZipCodeResource($this->whenLoaded('zipCode')),
                'agent' => new AgentResource($this->whenLoaded('agent')),
                'status' => new  StatusResource($this->whenLoaded('status')),
        ];
        
        // return parent::toArray($request);
    }
}
