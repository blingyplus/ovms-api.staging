<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'owner_id',
        'category_id',
        'microchip_id',
        'status',
        'mark',
        'color',
        'gender',
        'breed',
        'dob',
        'created_by',
        'weight',
        'delete_status',
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function PetCategory()
    {
        return $this->belongsTo(PetCategory::class);
    }
}
