<?php

namespace App\Models\app;

use App\Models\app\Post\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const COLORS = ['primary','secondary','positive','success','negative','warning','info','dark','white','black','slate','gray','zinc','neutral','stone','red','orange','amber','lime','green','emerald','teal','cyan','sky','blue','indigo','violet','purple','fuchsia','pink','rose'];

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
        'user_id','category_id','title','description','body','file_url','order','weighting','color_class','svg',
        'status_hero','status_posts','status_featured','status_projects','status_teams','status_workers','status_testimonials','status_alliances',
        'status_pinned','status_active','status_published','status_help',
    ];

    const COLUMN_COMMENTS = [
        'user_id'=>'Autor',
        'category_id'=>'Categoría',
        'title'=>'Título',
        'description'=>'Descripción del Post',
        'body'=>'DeTexto',
        'file_url'=>'Archivo adjunto',
        'order'=>'Orden',
        'weighting'=>'Ponderación',
        'color_class'=>'Color de la categoría',
        'svg'=>'Icono',
        'status_hero'=>'Disponible en hero',
        'status_posts'=>'Disponible en últ. historias',
        'status_featured'=>'Disponible historias destacadas',
        'status_projects'=>'Disponible en Proyectos',
        'status_teams'=>'Disponible en Directivos',
        'status_workers'=>'Disponible en Equipo',
        'status_testimonials'=>'Disponible en testimonios',
        'status_alliances'=>'Disponible en Alianzas',
        'status_pinned'=>'Anclado al inicio de la lista',
        'status_active'=>'Activo',
        'status_published'=>'Publicado',
        'status_help'=>'Ayudas',
    ];    

    /*INI relaciones entre modelos*/
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function scopePublic($query)
    {
        return $query->where('posts.status_active',true)->where('posts.status_published',true);
    } 
}






















