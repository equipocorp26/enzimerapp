<?php

namespace App\Models\User\Traits;

use App\Models\Career\Career;
use App\Models\University\University;

trait UserRelationship {
    public function career()
    {
        return $this->belongsTo(Career::class);
    }
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}   