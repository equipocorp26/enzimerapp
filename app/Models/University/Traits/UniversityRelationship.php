<?php

namespace App\Models\University\Traits;

use App\Models\Area\Area;

trait UniversityRelationship {
    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}   