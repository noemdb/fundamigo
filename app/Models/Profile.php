<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'identity_document',
        'profession',
        'occupation',
        'areas_of_expertise',
        'specializations',
        'email',
        'phone',
        'address',
        'birthdate',
        'role',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'birthdate' => 'date',
    ];

    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the full name of the profile owner.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Get the age of the profile owner.
     *
     * @return int
     */
    public function getAgeAttribute()
    {
        return $this->birthdate ? $this->birthdate->diff(now())->y : null;
    }

    /**
     * Check if the profile owner is active.
     *
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    /**
     * Check if the profile owner is an admin.
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->role === 'Admin';
    }
}
