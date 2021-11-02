<?php

namespace App\Models\Career;

use App\Models\Career\Traits\CareerRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory,
        CareerRelationship;

    protected $fillable = [
        'name',
        'area_id'
    ];
}
