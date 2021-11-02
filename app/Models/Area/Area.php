<?php

namespace App\Models\Area;

use App\Models\Area\Traits\AreaRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory,
        AreaRelationship;
    protected $fillable = [
        'name',
        'university_id'
    ];
}
