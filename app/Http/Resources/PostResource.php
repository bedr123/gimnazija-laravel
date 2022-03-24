<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'slug' => $this->slug,
            'naslov' => $this->naslov,
            'slika' => $this->slika,
            'category_id' => $this->category_id,
            'kontent' => $this->kontent,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
