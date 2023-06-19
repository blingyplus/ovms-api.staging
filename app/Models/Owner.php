<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name',
        'email',
        'digital_address',
        'phone',
        'purpose',
        'created_by',
        'delete_status'
    ];

    public function pets()
    {
        return $this->hasMany(Pets::class);
    }
}