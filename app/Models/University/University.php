<?php

namespace App\Models\University;

use App\Models\University\Traits\UniversityRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory,
        UniversityRelationship;

    protected $fillable = [
        'name',
        'acronym'
    ];
}
