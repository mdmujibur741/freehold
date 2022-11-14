<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgentResource extends JsonResource
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
          'title' => $this->title,
          'description' => $this->description,
          'image' => asset('/storage/'. $this->image),
          'facebook' => $this->facebook,
          'twitter' => $this->twitter,
          'linkedin' => $this->linkedin,
          'instagram' => $this->instagram,   
        ];
        // return parent::toArray($request);
    }
}
