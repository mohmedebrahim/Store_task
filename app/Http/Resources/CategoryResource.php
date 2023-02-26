<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}