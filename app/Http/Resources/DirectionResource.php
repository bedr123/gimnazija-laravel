<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DirectionResource extends JsonResource
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
            'naziv' => $this->naziv,
            'opis' => $this->opis,
            'ikonica' => $this->ikonica,
            'kontent' => $this->kontent,
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'slike' => $this->images()->get()->toArray()
        ];
    }
}
