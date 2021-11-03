<?php

namespace App\Models\User;

use App\Models\User\Traits\UserRelationship;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, 
        HasFactory, 
        Notifiable,
        UserRelationship;

    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'email',
        'status',
        'plan_type',
        'activation_code',
        'plan_id',
        'university_id',
        'career_id',
        'start_date',
        'end_date',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
