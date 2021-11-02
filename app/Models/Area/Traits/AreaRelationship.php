<?php

namespace App\Models\Area\Traits;

use App\Models\Career\Career;
use App\Models\University\University;

trait AreaRelationship {
    public function careers()
    {
        return $this->hasMany(Career::class);
    }
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}   