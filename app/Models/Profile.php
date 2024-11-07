<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'image',
        'identity_document',
        'profession',
        'occupation',
        'areas_of_expertise',
        'specializations',
        'phone',
        'address',
        'birthdate',
        'status',
    ];

    const EXPERTISE = [
        'Álgebra',
        'Astronomía',
        'Artística',
        'Biología',
        'Cálculo',
        'Ciencias Ambientales',
        'Ciencias Políticas',
        'Ciberseguridad',
        'Comercio',
        'Comunicación Científica',
        'Desarrollo de Software',
        'Diseño e Innovación',
        'Educación Especial',
        'Educación Física',
        'Educación Inicial',
        'Emprendimiento Tecnológico',
        'Estadística',
        'Ética en la Tecnología',
        'Física',
        'Geometría',
        'Historia',
        'Idiomas',
        'Ingeniería Civil',
        'Ingeniería Eléctrica',
        'Ingeniería Mecánica',
        'Ingeniería Química',
        'Ingeniería [Otra]',
        'Informática',
        'Inteligencia Artificial',
        'Matemáticas',
        'Medicina',
        'Música',
        'Química',
        'Robótica',
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
        return $this->belongsTo(User::class,'user_id');
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
