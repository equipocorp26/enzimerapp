<?php

namespace App\Models\Career\Traits;

use App\Models\Area\Area;

trait CareerRelationship {
    public function career()
    {
        return $this->belongsTo(Area::class);
    }
}   