<?php

namespace App\Http\Resources;

use App\Models\Pets;
use App\Models\Owner;
use App\Models\PetCategory;
use Illuminate\Http\Resources\Json\JsonResource;

class PetResource extends JsonResource
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
            'uuid' => $this->uuid,
            'name' => $this->name,
            'owner_id' => $this->owner_id,
            'owner' => Owner::firstWhere('id', $this->owner_id)->name ?? 'Unknown',
            'category_id' => $this->category_id,
            'category' => PetCategory::firstWhere('id', $this->category_id)->name ?? 'Unknown',
            'microchip_id' => $this->microchip_id,
            'status' => $this->status,
            'mark' => $this->mark,
            'color' => $this->color,
            'gender' => $this->gender,
            'breed' => $this->breed,
            'dob' => $this->dob,
            'created_by' => $this->created_by,
            'weight' => $this->weight,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
