<?php

namespace App\Models\app\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descriptions',
        'color_class',
        'order',
        'status_navabar',
        'status_aside',
        'status_active',
        'status_published',
    ];

    const COLUMN_COMMENTS = [
        'name' => 'Nombre',
        'descriptions'=>'Descripción',
        'color_class'=>'Color de la categoría',
        'order'=>'Orden',
        'status_navabar'=>'Disponible en el navabar del sitio',
        'status_aside'=>'Disponible en el aside',
        'status_active'=>'Estado',
        'status_published'=>'Publicado',
    ];

    const COLORS = ['primary','secondary','positive','negative','warning','info','dark','white','black','slate','gray','zinc','neutral','stone','red','orange','amber','lime','green','emerald','teal','cyan','sky','blue','indigo','violet','purple','fuchsia','pink','rose'];
}
