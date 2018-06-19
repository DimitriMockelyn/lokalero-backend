<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Project extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'project' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'background' => $this->image_cover,
            'slogan' => $this->slogan,
            'location' => $this->location,
            'equivalences' => $this->equivalences
        ];
    }
}
